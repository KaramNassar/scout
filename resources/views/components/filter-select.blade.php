@props(['name', 'models'])

<select
    x-data="singleSelect_{{  $name }}"
    name="{{ $name }}">
    <option value="">{{ __("select a $name") }}</option>
    <option value="all" @selected(request($name) == 'all')>{{ __("all " . Str::plural($name)) }}</option>
    @foreach($models as $model)
        <option
            value="{{ $model->id }}" @selected(request($name) == $model->id)>{{ $model->name }}
        </option>
    @endforeach
</select>

@push('scripts')
    <script>
        Alpine.data("singleSelect_{{ $name }}", () => ({
            style: {
                wrapper: "relative mt-4",
                select:
                    "w-full rounded-full border border-gray-300 bg-gray-100 px-4 py-2 rtl:pr-8 rtl:pl-10 text-sm py-2 px-2 text-sm flex gap-2 items-center cursor-pointer text-gray-900 placeholder-gray-500 focus:ring-main-light focus:border-main-light focus:outline-none focus:ring-2 dark:placeholder-gray-400 dark:bg-gray-600 dark:text-gray-100 dark:focus:ring-main-dark",
                menuWrapper:
                    "w-full rounded-lg py-1.5 text-sm mt-1 shadow-lg bg-gray-100 dark:bg-gray-600 text-gray-900 dark:text-gray-100 absolute z-10",
                menu: "max-h-52 overflow-y-auto",
                textList: "overflow-hidden pr-10 rtl:pr-0 text-ellipsis grow whitespace-nowrap",
                trigger: "absolute right-3",
                search:
                    "px-3 w-full rounded-full focus:ring-main-light focus:border-main-light focus:outline-none focus:ring-2 bg-gray-100 dark:bg-gray-600 text-gray-900 dark:text-gray-100 outline-0 mb-1 dark:focus:ring-main-dark",
                label: "hover:bg-gray-200 dark:hover:bg-gray-700 cursor-pointer flex py-2 px-3"
            },

            icons: {
                arrowDown:
                    '<svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24" class="h-4 w-4"><path xmlns="http://www.w3.org/2000/svg" stroke-linecap="round" stroke-width="2" d="M5 10l7 7 7-7"/></svg>'
            },

            init() {
                const style = this.style;

                const originalSelect = this.$el;
                originalSelect.classList.add("hidden");

                const wrapper = document.createElement("div");
                wrapper.className = style.wrapper;
                wrapper.setAttribute("x-data", "newSelect_{{ $name }}");

                const newSelect = document.createElement("div");
                newSelect.className = style.select;
                newSelect.setAttribute("x-bind", "selectTrigger");

                const textList = document.createElement("span");
                textList.className = style.textList;

                const triggerBtn = document.createElement("button");
                triggerBtn.className = style.trigger;
                triggerBtn.type = 'button'
                triggerBtn.innerHTML = this.icons.arrowDown;

                newSelect.append(textList);
                newSelect.append(triggerBtn);

                const menuWrapper = document.createElement("div");
                menuWrapper.className = style.menuWrapper;
                menuWrapper.setAttribute("x-bind", "selectMenu");

                const menu = document.createElement("div");
                menu.className = style.menu;

                const search = document.createElement("input");
                search.className = style.search;
                search.setAttribute("x-bind", "search");
                search.setAttribute("placeholder", "{{ __('filter') }}");

                menuWrapper.append(search);
                menuWrapper.append(menu);

                originalSelect.parentNode.insertBefore(
                    wrapper,
                    originalSelect.nextSibling
                );

                wrapper.appendChild(newSelect);
                wrapper.appendChild(menuWrapper);

                Alpine.data("newSelect_{{ $name }}", () => ({
                    open: false,
                    items: [],
                    selectedItem: "",
                    filterBy: "",
                    init() {
                        this.regenerateTextItems();
                        this.processItems(originalSelect);
                    },

                    processItems(parent) {
                        const items = parent.querySelectorAll("option");
                        const subMenu = document.createElement("ul");

                        items.forEach((item) => {
                            const li = document.createElement("li");
                            li.setAttribute("x-bind", "listItem");

                            const label = document.createElement("label");
                            label.className = style.label;
                            label.setAttribute("for", originalSelect.name + "_" + item.value);
                            label.innerText = item.innerText;

                            if (item.hasAttribute("selected") && item.value) {
                                label.classList.add('bg-gray-200', 'dark:bg-gray-700');
                            }

                            label.addEventListener("click", () => {
                                originalSelect.value = item.value;
                                this.regenerateTextItems();
                                this.open = false;
                            });

                            li.append(label);
                            subMenu.appendChild(li);
                        });
                        menu.appendChild(subMenu);
                    },

                    regenerateTextItems() {
                        this.selectedItem = "";
                        this.items.forEach((item) => {
                            const label = item.querySelector("label");

                            if (originalSelect.value === label.htmlFor.split('_')[1]) {
                                this.selectedItem = label.innerText;
                            }
                        });

                        textList.innerText = this.selectedItem;
                    },

                    selectTrigger: {
                        ["@click"]() {
                            this.open = !this.open;

                            if (this.open) {
                                this.$nextTick(() =>
                                    this.$root.querySelector("input[x-bind=search]").focus()
                                );
                            }
                        }
                    },
                    selectMenu: {
                        ["x-show"]() {
                            return this.open;
                        },
                        ["x-transition"]() {
                        },
                        ["@keydown.escape.window"]() {
                            this.open = false;
                        },
                        ["@click.away"]() {
                            this.open = false;
                        },
                        ["x-init"]() {
                            this.items = this.$el.querySelectorAll("li");
                            this.regenerateTextItems();
                        }
                    },
                    search: {
                        ["@keydown.escape.stop"]() {
                            this.filterBy = "";
                            this.$el.blur();
                        },
                        ["@keyup"]() {
                            this.filterBy = this.$el.value;
                        },
                        ["x-model"]() {
                            return this.filterBy;
                        }
                    },
                    listItem: {
                        ["x-show"]() {
                            return (
                                this.filterBy === "" ||
                                this.$el.innerText
                                    .toLowerCase()
                                    .includes(this.filterBy.toLowerCase())
                            );
                        }
                    }
                }));
            }
        }));

    </script>
@endpush

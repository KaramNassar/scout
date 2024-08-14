@props(['name', 'models'])

<select
    multiple x-data="multiselect"
    name="{{ $name }}[]">
    @foreach($models as $model)
        <option
            value="{{ $model->id }}" @selected(in_array($model->id, request($name) ?? []))>{{ $model->name }}</option>
    @endforeach
</select>

@push('scripts')
    <script>
        Alpine.data("multiselect", () => ({
            style: {
                wrapper: "relative mt-4",
                select:
                    "w-full rounded-full border border-gray-300 bg-gray-100 px-4 py-2 rtl:pr-8 rtl:pl-10 text-sm py-2 px-2 text-sm flex gap-2 items-center cursor-pointer text-gray-900 placeholder-gray-500 focus:ring-main-light focus:border-main-light focus:outline-none focus:ring-2 dark:placeholder-gray-400 dark:bg-gray-600 dark:text-gray-100 dark:focus:ring-main-dark",
                menuWrapper:
                    "w-full rounded-lg py-1.5 text-sm mt-1 shadow-lg bg-gray-100 dark:bg-gray-600 text-gray-900 dark:text-gray-100 absolute z-10",
                menu: "max-h-52 overflow-y-auto",
                textList: "overflow-hidden pr-10 rtl:pr-0 text-ellipsis grow whitespace-nowrap",
                trigger: "absolute right-3",
                badge: "absolute rtl:left-3 rtl:right-auto left-auto right-8 py-0.5 px-2 rounded-full bg-gray-300 text-gray-900 dark:text-gray-50 dark:bg-gray-500",
                search:
                    "px-3 w-full rounded-full focus:ring-main-light focus:border-main-light focus:outline-none focus:ring-2 bg-gray-100 dark:bg-gray-600 text-gray-900 dark:text-gray-100 outline-0 mb-1 dark:focus:ring-main-dark",
                label: "hover:bg-gray-200 dark:hover:bg-gray-700 cursor-pointer flex items-center py-2 px-3"
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
                wrapper.setAttribute("x-data", "newSelect");

                const newSelect = document.createElement("div");
                newSelect.className = style.select;
                newSelect.setAttribute("x-bind", "selectTrigger");

                const textList = document.createElement("span");
                textList.className = style.textList;

                const triggerBtn = document.createElement("button");
                triggerBtn.className = style.trigger;
                triggerBtn.type = 'button'
                triggerBtn.innerHTML = this.icons.arrowDown;

                const countBadge = document.createElement("span");
                countBadge.className = style.badge;
                countBadge.setAttribute("x-bind", "countBadge");

                newSelect.append(textList);
                newSelect.append(countBadge);
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

                processItems(originalSelect);

                function processItems(parent) {
                    const items = parent.querySelectorAll("option");
                    const subMenu = document.createElement("ul");

                    items.forEach((item) => {
                        const li = document.createElement("li");
                        li.setAttribute("x-bind", "listItem");

                        const checkBox = document.createElement("input");
                        checkBox.classList.add("ml-2", "mr-2");
                        checkBox.type = "checkbox";
                        checkBox.value = item.value;
                        checkBox.id = originalSelect.name + "_" + item.value;

                        const label = document.createElement("label");
                        label.className = style.label;
                        label.setAttribute("for", checkBox.id);
                        label.innerText = item.innerText;

                        checkBox.setAttribute("x-bind", "checkBox");

                        if (item.hasAttribute("selected")) {
                            checkBox.checked = true;
                        }
                        label.prepend(checkBox);
                        li.append(label);
                        subMenu.appendChild(li);
                    });
                    menu.appendChild(subMenu);
                }

                wrapper.appendChild(newSelect);
                wrapper.appendChild(menuWrapper);

                Alpine.data("newSelect", () => ({
                    open: false,
                    showCountBadge: false,
                    items: [],
                    selectedItems: [],
                    filterBy: "",
                    init() {
                        this.regenerateTextItems();
                    },

                    regenerateTextItems() {
                        this.selectedItems = [];
                        this.items.forEach((item) => {
                            const checkbox = item.querySelector("input[type=checkbox]");
                            const text = item.querySelector("label").innerText;
                            if (checkbox.checked) {
                                this.selectedItems.push(text);
                            }
                        });

                        this.showCountBadge = this.selectedItems.length > 1;

                        if (this.selectedItems.length === 0) {
                            textList.innerHTML = '<span>{{ __('select a tag') }}</span>';
                        } else {
                            textList.innerText = this.selectedItems.join(", ");
                        }
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
                    checkBox: {
                        ["@change"]() {
                            const checkBox = this.$el;

                            if (checkBox.checked) {
                                originalSelect
                                    .querySelector("option[value='" + checkBox.value + "']")
                                    .setAttribute("selected", true);
                            } else {
                                originalSelect
                                    .querySelector("option[value='" + checkBox.value + "']")
                                    .removeAttribute("selected");
                            }
                            this.regenerateTextItems();
                        }
                    },
                    countBadge: {
                        ["x-show"]() {
                            return this.showCountBadge;
                        },
                        ["x-text"]() {
                            return this.selectedItems.length;
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
                                    .startsWith(this.filterBy.toLowerCase())
                            );
                        }
                    }
                }));
            }
        }));

    </script>
@endpush

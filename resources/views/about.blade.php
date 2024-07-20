@extends('layouts.app')


@section('header')
    <x-page-header :title="__('About Syrian Syriac Scout')"/>
@endsection


@section('content')

    <article class="dark:bg-gray-800 py-4 rounded-md px-0 lg:px-4 prose dark:prose-invert max-w-full">
        <p>The Syrian Syriac Scout organization is dedicated to empowering the youth of the Syrian Syriac community
            through a blend of adventure, education, and cultural heritage. Our mission is to foster personal growth,
            community spirit, and leadership skills among young people, ensuring they grow into responsible, confident,
            and compassionate adults.</p>

        <h2>Our History</h2>
        <p>Founded in [Year], the Syrian Syriac Scout organization has a rich history rooted in the traditions and
            values of the Syriac heritage. We have proudly served the community for decades, offering programs that
            blend scouting principles with our unique cultural identity. Our journey began with a small group of
            enthusiastic volunteers and has grown into a vibrant network of scouts and leaders across the region.</p>

        <h2>Our Programs</h2>
        <p>We offer a wide range of programs and activities designed to engage and inspire our scouts. From outdoor
            adventures like camping, hiking, and survival skills to community service projects and cultural workshops,
            our programs are tailored to develop a well-rounded character in our members. We emphasize the importance of
            teamwork, resilience, and respect for nature, while also nurturing a deep connection to our Syriac
            roots.</p>

        <h2>Leadership and Community</h2>
        <p>At the heart of our organization is a commitment to leadership and community. Our scouts are encouraged to
            take on leadership roles, both within the organization and in their broader communities. Through various
            projects and initiatives, they learn the value of service, empathy, and making a positive impact. Our
            leaders and volunteers are dedicated individuals who provide mentorship and guidance, ensuring that each
            scout has the support they need to thrive.</p>

        <h2>Join Us</h2>
        <p>We invite you to join the Syrian Syriac Scout family. Whether you are a young person looking to embark on an
            exciting scouting journey, a parent seeking a positive environment for your child, or a volunteer ready to
            make a difference, there is a place for you in our community. Together, we can build a brighter future, one
            scout at a time.</p>
        <p>Thank you for visiting our website. We look forward to welcoming you to the Syrian Syriac Scout family!</p>

        <h2>Contact Us</h2>
        <div>
            <a href="{{ route('contact') }}" class="text-blue-500 hover:underline dark:text-blue-300">Visit our Contact
                Us page</a>
        </div>

    </article>

@endsection

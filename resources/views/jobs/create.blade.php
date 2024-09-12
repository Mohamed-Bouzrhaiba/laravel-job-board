<x-layout>
    <x-page-heading>Add New Job</x-page-heading>
    <x-forms.form method="post" action="/jobs">
        <x-forms.input label="title" name="title" placeholder="Full-Stack Developer"/>
        <x-forms.input label="salary" name="salary" placeholder="12.000$"/>
        <x-forms.input label="location" name="location" placeholder="Usa, Uk ..."/>

        <x-forms.select label="schedule" name="schedule">
            <option>Part Time</option>
            <option>Full Time</option>
        </x-forms.select>

        <x-forms.input label="Company Website" name="url" placeholder="company.com "/>
        <x-forms.input label="Tags (Please add , between them)" name="tags" placeholder="PHP, JAVA , JS "/>

        <x-forms.checkbox label="feature (paid)" name="featured " />
        <x-forms.button >Post The Job</x-forms.button>

    </x-forms.form>
</x-layout>

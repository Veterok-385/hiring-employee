<x-layouts.auth>
    <x-slot:title>
        Новый кандидат
    </x-slot:title>

    <x-card>
        <x-card.body>
            <x-form action="{{ route('addcandidate.store') }}" method="post" enctype="multipart/form-data">
                <x-form.item>
                    <x-form.label>Фамилия</x-form.label>
                    <x-form.text name="last_name" placeholder="Введите фамилию" autofocus />
                </x-form.item>

                <x-form.item>
                    <x-form.label>Имя</x-form.label>
                    <x-form.text name="first_name" placeholder="Введите имя" />
                </x-form.item>

                <x-form.item>
                    <x-form.label>Отчество</x-form.label>
                    <x-form.text name="middle_name" placeholder="Введите отчество" />
                </x-form.item>

                <x-form.item>
                    <x-form.label>Загрузить фото</x-form.label>
                    <x-form.text name="photo" type="file" />
                </x-form.item>

                <x-form.item>
                    <x-form.label>Должность</x-form.label>
                    <x-form.text name="job_title" placeholder="Введите должность (необязательно)" />
                </x-form.item>

                <x-form.item>
                    <x-form.label>Компания</x-form.label>
                    <x-form.text name="company" placeholder="Введите компанию (необязательно)" />
                </x-form.item>

                <x-form.item>
                    <x-form.label>Ожидаемая зарплата</x-form.label>
                    <x-form.text name="salary" placeholder="Введите ожидаемую зарплату (необязательно)" />
                </x-form.item>

                <x-form.item>
                    <x-form.label>Город</x-form.label>
                    <x-form.text name="city" placeholder="Введите город (необязательно)" />
                </x-form.item>

                <x-form.item>
                    <x-form.label>Дата рождения</x-form.label>
                    <x-form.text type="date" name="date_of_birth" placeholder="Введите дату рождения (необязательно)" />
                </x-form.item>

                <x-form.item>
                    <x-form.label>Телефон</x-form.label>
                    <x-form.text type="phone" name="telephone" placeholder="Введите телефон" />
                </x-form.item>

                <x-form.item>
                    <x-form.label>Электронная почта</x-form.label>
                    <x-form.text type="email" name="email" placeholder="Введите электронную почту" />
                </x-form.item>


                <x-form.item>
                    <x-form.label>Дополнительная информация</x-form.label>                    
                    <textarea name="additional_information" rows="4" class="block p-2.5 w-full text-sm text-gray-900 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Введите дополнительную информацию"></textarea>
                </x-form.item>

               

                <x-button type="submit">Ввести данные</x-button>
            </x-form>
        </x-card.body>
    </x-card>

    <x-slot:crosslink>
        Уже зарегистрированы?
        <x-link to="{{ route('login') }}">
            Войти
        </x-link>
    </x-slot:crosslink>
</x-layouts.auth>

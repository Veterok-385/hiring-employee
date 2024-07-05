<x-layouts.auth>
    <x-slot:title>
        Регистрация аккаунта
    </x-slot:title>

    <x-card>
        <x-card.body>
            <x-form action="{{ route('registration.store') }}" method="post">
                <x-form.item>
                    <x-form.label>Ваша фамилия</x-form.label>
                    <x-form.text name="last_name" placeholder="Введите фамилию" autofocus />
                </x-form.item>

                <x-form.item>
                    <x-form.label>Ваше имя</x-form.label>
                    <x-form.text name="first_name" placeholder="Введите имя" />
                </x-form.item>

                <x-form.item>
                    <x-form.label>Ваше отчество</x-form.label>
                    <x-form.text name="middle_name" placeholder="Введите отчество" />
                </x-form.item>

                <x-form.item>
                    <label id="listbox-label" class="block text-sm font-medium leading-6 text-gray-900">Выберите категорию</label>

                    <div x-data="{ open: false,  category_id: '{{ $categories->first()->id }}', category: '{{ $categories->first()->name }}'}" class="relative mt-2">
                    <input type="hidden" name="employee_category_id" x-bind:value="category_id">
                      <button x-on:click="open = true" type="button" class="relative w-full cursor-default rounded-md bg-white py-1.5 pl-3 pr-10 text-left text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 sm:text-sm sm:leading-6" aria-haspopup="listbox" aria-expanded="true" aria-labelledby="listbox-label">
                        <span class="flex items-center">
                          <span class="ml-0 block truncate" x-text=category></span>
                        </span>
                        <span class="pointer-events-none absolute inset-y-0 right-0 ml-3 flex items-center pr-2">
                          <svg class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M10 3a.75.75 0 01.55.24l3.25 3.5a.75.75 0 11-1.1 1.02L10 4.852 7.3 7.76a.75.75 0 01-1.1-1.02l3.25-3.5A.75.75 0 0110 3zm-3.76 9.2a.75.75 0 011.06.04l2.7 2.908 2.7-2.908a.75.75 0 111.1 1.02l-3.25 3.5a.75.75 0 01-1.1 0l-3.25-3.5a.75.75 0 01.04-1.06z" clip-rule="evenodd" />
                          </svg>
                        </span>
                      </button>
                      <ul x-cloak x-show="open" x-on:click.outside="open = false" class="absolute z-10 mt-1 max-h-56 w-full overflow-auto rounded-md bg-white py-1 text-base shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none sm:text-sm" tabindex="-1" role="listbox" aria-labelledby="listbox-label" aria-activedescendant="listbox-option-3">
                        @foreach($categories as $category)
                        <li x-data="{focus: 'relative cursor-default select-none py-2 pl-3 pr-9 text-gray-900'}" x-on:click="category = '{{ $category->name }}', category_id = '{{ $category->id }}'" x-on:mouseleave="focus = 'relative cursor-default select-none py-2 pl-3 pr-9 text-gray-900'" x-on:mouseenter="focus = 'bg-indigo-600 text-white relative cursor-default select-none py-2 pl-3 pr-9 text-gray-900'" x-bind:class="focus" id="listbox-option-0" role="option">

                            <div class="flex items-center">
                            <!-- Selected: "font-semibold", Not Selected: "font-normal" -->
                            <span class="ml-3 block truncate font-semibold">{{ $category->name }}</span>
                          </div>
                        </li>
                        <!-- More items... -->
                        @endforeach
                      </ul>
                    </div>


                </x-form.item>

                <x-form.item>
                    <x-form.label>Ваша должность</x-form.label>
                    <x-form.text name="job_title" placeholder="Введите должность" />
                </x-form.item>

                <x-form.item>
                    <x-form.label>Придумайте логин</x-form.label>
                    <x-form.text name="login" placeholder="Придумайте логин" />
                </x-form.item>

                <x-form.item>
                    <x-form.label>Придумайте пароль</x-form.label>
                    <x-form.text type="password" name="password" placeholder="*******" />
                </x-form.item>

                <x-form.item>
                    <x-form.label>Повторите пароль</x-form.label>
                    <x-form.text type="password" name="password_confirmation" placeholder="*******" />
                </x-form.item>

                <x-form.item>
                    <x-form.check name="agreement">
                        Разрешаю обработку своих персональных данных.
                    </x-form.check>
                </x-form.item>

                <x-button type="submit">Зарегистрироваться</x-button>
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

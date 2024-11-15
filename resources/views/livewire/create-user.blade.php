<div id="form-create">
    <x-jet-form-section :submit="$action" class="mb-4">
        <x-slot name="title">
            {{ __('User') }}
        </x-slot>

        <x-slot name="description">
            {{ __('Lengkapi data berikut dan submit untuk membuat data user baru') }}
        </x-slot>

        <x-slot name="form" class="rounded rounded-lg">
            <div class="form-group col-span-6 sm:col-span-5 mb-3">
                <x-jet-label for="name" value="{{ __('Nama') }}"/>
                <small>Nama Lengkap Akun</small>
                <x-jet-input id="name" type="text" class="block w-full form-control shadow-none" wire:model.defer="user.name"/>
                <x-jet-input-error for="user.name" class="mt-2"/>
            </div>

            <div class="form-group col-span-6 sm:col-span-5 mb-3">
                <x-jet-label for="email" value="{{ __('Email') }}"/>
                <x-jet-input id="email" type="text" class="block w-full form-control shadow-none"
                             wire:model.defer="user.email"/>
                <x-jet-input-error for="user.email" class="mt-2"/>
            </div>
{{--            <div class="form-group col-span-6 sm:col-span-5 mb-3">--}}
{{--                <x-jet-label for="role" value="{{ __('Role') }}"/>--}}
{{--                <select name="role" id="role" wire:model.defer="user.role" class="form-control">--}}
{{--                    <option value="1">Super Admin</option>--}}
{{--                    <option value="2">Admin</option>--}}
{{--                    <option value="3">Asistan</option>--}}
{{--                    <option value="4">Guest</option>--}}
{{--                </select>--}}
{{--                <x-jet-input-error for="user.role" class="mt-2"/>--}}
{{--            </div>--}}

            @if ($action == "createUser")
                <div class="form-group col-span-6 sm:col-span-5 mb-3">
                    <x-jet-label for="password" value="{{ __('Password') }}"/>
                    <small>Minimal 8 karakter</small>
                    <x-jet-input id="password" type="password" class="block w-full form-control shadow-none"
                                 wire:model.defer="user.password"/>
                    <x-jet-input-error for="user.password" class="mt-2"/>
                </div>

                <div class="form-group col-span-6 sm:col-span-5 mb-3">
                    <x-jet-label for="password_confirmation" value="{{ __('Konfirmasi Password') }}"/>
                    <small>Minimal 8 karakter</small>
                    <x-jet-input id="password_confirmation" type="password"
                                 class="block w-full form-control shadow-none"
                                 wire:model.defer="user.password_confirmation"/>
                    <x-jet-input-error for="user.password_confirmation" class="mt-2"/>
                </div>
            @endif
{{--                <div class="form-group col-span-6 sm:col-span-5 mb-3">--}}
{{--                    <x-jet-label for="employee_id" value="{{ __('Employee ID') }}"/>--}}
{{--                    <x-jet-input id="employee_id" type="text" class="block w-full form-control shadow-none"--}}
{{--                                 wire:model.defer="user.employee_id"/>--}}
{{--                    <x-jet-input-error for="user.employee_id" class="mt-2"/>--}}
{{--                </div>--}}
{{--                <div class="form-group col-span-6 sm:col-span-5 mb-3">--}}
{{--                    <x-jet-label for="employee_id" value="{{ __('Posisi') }}"/>--}}
{{--                    <x-jet-input id="employee_id" type="text" class="block w-full form-control shadow-none"--}}
{{--                                 wire:model.defer="user.position"/>--}}
{{--                    <x-jet-input-error for="user.position" class="mt-2"/>--}}
{{--                </div>--}}


{{--            <div class="form-group col-span-6 sm:col-span-5 mb-3">--}}
{{--                <x-jet-label for="name_bank" value="{{ __('Quotes') }}"/>--}}
{{--            <textarea wire:model.defer="user.quotes" class="block w-full form-control shadow-none"></textarea/>--}}
{{--            </div>--}}
        </x-slot>

        <x-slot name="actions">
            <x-jet-action-message class="mr-3" on="saved">
                {{ __($button['submit_response']) }}
            </x-jet-action-message>

            <x-notify-message on="saved" type="success" :message="__($button['submit_response_notyf'])"/>

            <x-jet-button class="btn-primary">
                {{ __($button['submit_text']) }}
            </x-jet-button>
        </x-slot>
    </x-jet-form-section>
</div>

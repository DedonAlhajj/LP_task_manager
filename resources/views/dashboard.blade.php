<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                    @if(auth()->user()->hasRole('Admin'))
                        <h2>لوحة التحكم للأدمن</h2>
                        <p>يمكنك إدارة جميع المهام هنا.</p>
                    @elseif(auth()->user()->hasRole('Manager'))
                        <h2>لوحة التحكم للمدير</h2>
                        <p>المهام الخاصة بك:</p>
                    @elseif(auth()->user()->hasRole('Team Member'))
                        <h2>لوحة التحكم لعضو الفريق</h2>
                        <p>المهام المخصصة لك:</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

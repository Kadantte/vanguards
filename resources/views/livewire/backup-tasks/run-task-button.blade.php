<div>
    @if ($backupTask->isRunning())
        <x-secondary-button iconOnly type="button" class="bg-opacity-50 cursor-not-allowed" disabled
                            title="{{ __('Task is running') }}">
            <span class="sr-only">Task Running</span>
            @svg('heroicon-o-stop', 'w-4 h-4')
        </x-secondary-button>
    @elseif ($backupTask->isPaused())
        <x-secondary-button iconOnly type="button" class="cursor-not-allowed bg-opacity-50" disabled
                            title="{{ __('Task is disabled') }}">
            <span class="sr-only">Task Disabled</span>
            @svg('heroicon-o-play', 'w-4 h-4')
        </x-secondary-button>
    @elseif ($backupTask->isAnotherTaskRunningOnSameRemoteServer())
        <x-secondary-button iconOnly type="button" class="cursor-not-allowed bg-opacity-50" disabled
                            title=" {{ __('Another task is running on the same remote server') }}">
            <span class="sr-only">
                {{ __('Another task is running on the same remote server') }}
            </span>
            @svg('heroicon-o-play', 'w-4 h-4')
        </x-secondary-button>
    @else
        <x-secondary-button iconOnly wire:click="runTask" type="button" title="{{ __('Click to run this task') }}">
            <span class="sr-only">Run Task</span>
            @svg('heroicon-o-play', 'w-4 h-4')
        </x-secondary-button>
    @endif
</div>
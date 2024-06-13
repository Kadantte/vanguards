<?php

use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

Breadcrumbs::for('overview', function (BreadcrumbTrail $trail) {
    $trail->push(__('Overview'), route('overview'));
});

Breadcrumbs::for('frequently-asked-questions', function (BreadcrumbTrail $trail) {
    $trail->push(__('FAQ'), route('frequently-asked-questions'));
});

Breadcrumbs::for('profile', function (BreadcrumbTrail $trail) {
    $trail->push(__('Profile'), route('profile'));
});

Breadcrumbs::for('backup-tasks.index', function (BreadcrumbTrail $trail) {
    $trail->push(__('Backup Tasks'), route('backup-tasks.index'));
});

Breadcrumbs::for('backup-tasks.create', function (BreadcrumbTrail $trail) {
    $trail->parent('backup-tasks.index');
    $trail->push(__('Add Backup Task'), route('backup-tasks.create'));
});

Breadcrumbs::for('backup-tasks.edit', function (BreadcrumbTrail $trail, $backupTask) {
    $trail->parent('backup-tasks.index');
    $trail->push(__('Update Backup Task'), route('backup-tasks.edit', $backupTask));
});

Breadcrumbs::for('backup-destinations.index', function (BreadcrumbTrail $trail) {
    $trail->push(__('Backup Destinations'), route('backup-destinations.index'));
});

Breadcrumbs::for('backup-destinations.create', function (BreadcrumbTrail $trail) {
    $trail->parent('backup-destinations.index');
    $trail->push(__('Add Backup Destination'), route('backup-destinations.create'));
});

Breadcrumbs::for('backup-destinations.edit', function (BreadcrumbTrail $trail, $backupDestination) {
    $trail->parent('backup-destinations.index');
    $trail->push(__('Update Backup Destination'), route('backup-destinations.edit', $backupDestination));
});

Breadcrumbs::for('remote-servers.index', function (BreadcrumbTrail $trail) {
    $trail->push(__('Remote Servers'), route('remote-servers.index'));
});

Breadcrumbs::for('remote-servers.create', function (BreadcrumbTrail $trail) {
    $trail->parent('remote-servers.index');
    $trail->push(__('Add Remote Server'), route('remote-servers.create'));
});

Breadcrumbs::for('remote-servers.edit', function (BreadcrumbTrail $trail, $remoteServer) {
    $trail->parent('remote-servers.index');
    $trail->push(__('Update Remote Server'), route('remote-servers.edit', $remoteServer));
});

<?php

Breadcrumbs::for('admin.dashboard', function ($trail) {
    $trail->push(__('strings.backend.dashboard.title'), route('admin.dashboard'));
});


Breadcrumbs::for('admin.find_candidate.index', function ($trail) {
    $trail->push('Find Candidates', route('admin.contact_us.index'));
});
Breadcrumbs::for('admin.find_candidate.edit', function ($trail) {
    $trail->push('Edit Find Candidate', route('admin.find_candidate.edit',1));
});

require __DIR__.'/auth.php';
require __DIR__.'/log-viewer.php';

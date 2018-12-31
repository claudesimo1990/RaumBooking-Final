<?php

return [
    'words' => [
        'cancel'  => 'Stornieren',
        'delete'  => 'Löschen',
        'edit'    => 'Bearbeiten',
        'yes'     => 'ja',
        'no'      => 'nein',
        'minutes' => '1 minute| :count minutes',
    ],

    'discussion' => [
        'new'          => 'Neu '.trans('chatter::intro.titles.discussion'),
        'all'          => 'Alles '.trans('chatter::intro.titles.discussion'),
        'create'       => 'Erstellen '.trans('chatter::intro.titles.discussion'),
        'posted_by'    => 'erstellt von',
        'head_details' => 'Cathegory',

    ],
    'response' => [
        'confirm'     => 'Möchten Sie diese Antwort wirklich löschen?',
        'yes_confirm' => 'Ja, löschen Sie es',
        'no_confirm'  => 'Nein Danke',
        'submit'      => 'Antwort abschicken',
        'update'      => 'Antwort aktualisieren',
    ],

    'editor' => [
        'title'               => 'Titel von '.trans('chatter::intro.titles.discussion'),
        'select'              => 'Wählen Sie eine Kategorie',
        'tinymce_placeholder' => 'Geben Sie Ihre '.trans('chatter::intro.titles.discussion').' Hier...',
        'select_color_text'   => 'Wählen Sie dazu eine Farbe aus '.trans('chatter::intro.titles.discussion').' (optional)',
    ],

    'email' => [
        'notify' => 'Benachrichtigen Sie mich, wenn jemand antwortet',
    ],

    'auth' => 'Please <a href="/:home/login">login</a>
                or <a href="/:home/register">register</a>
                to leave a response.',

];

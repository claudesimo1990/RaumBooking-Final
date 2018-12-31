<?php

return [
    'success' => [
        'title'  => 'Gut gemacht!',
        'reason' => [
            'submitted_to_post'       => 'Antwort erfolgreich übermittelt an '.mb_strtolower(trans('chatter::intro.titles.discussion')).'.',
            'updated_post'            => 'Erfolgreich aktualisiert '.mb_strtolower(trans('chatter::intro.titles.discussion')).'.',
            'destroy_post'            => 'Antwort erfolgreich gelöscht und '.mb_strtolower(trans('chatter::intro.titles.discussion')).'.',
            'destroy_from_discussion' => 'Die Antwort wurde erfolgreich vom gelöscht'.mb_strtolower(trans('chatter::intro.titles.discussion')).'.',
            'created_discussion'      => 'Erfolgreich ein neues erstellt '.mb_strtolower(trans('chatter::intro.titles.discussion')).'.',
        ],
    ],
    'info' => [
        'title' => 'Kopf hoch!',
    ],
    'warning' => [
        'title' => 'Wuh Oh!',
    ],
    'danger'  => [
        'title'  => 'Oh Snap!',
        'reason' => [
            'errors'            => 'Bitte behebe die folgenden Fehler:',
            'prevent_spam'      => 'Um Spam zu vermeiden, warten Sie bitte mindestens: Minuten zwischen dem Senden von Inhalten.',
            'trouble'           => 'Entschuldigung, es scheint ein Problem beim Senden Ihrer Antwort aufgetreten zu sein.',
            'update_post'       => 'Nah ah ah ... Konnte deine Antwort nicht aktualisieren. Stellen Sie sicher, dass Sie nichts Schattiges tun.',
            'destroy_post'      => 'Nah ah ah ... Konnte die Antwort nicht löschen. Stellen Sie sicher, dass Sie nichts Schattiges tun.',
            'create_discussion' => 'Whoops :( Es scheint ein Problem bei der Erstellung Ihres '.mb_strtolower(trans('chatter::intro.titles.discussion')).'.',
        	'title_required'    => 'Bitte schreibe einen Titel',
        	'title_min'		    => 'Der Titel muss mindestens: min Zeichen enthalten.',
        	'title_max'		    => 'Der Titel muss nicht mehr als haben :max characters.',
        	'content_required'  => 'Bitte schreibe einen Inhalt',
        	'content_min'  		=> 'Der Inhalt muss mindestens Folgendes umfassen: min Zeichen',
        	'category_required' => 'Bitte wähle eine Kategorie',

       
       
        ],
    ],
];



#Symfony

SITE: http://symfony.com/



INFO:

Installation de symfony:  http://symfony.com/legacy/doc/getting-started/1_4/fr/03-symfony-installation


DOC: http://symfony.com/doc/current/index.html




Blog créer en Symfony 3

https://github.com/NikEurope/Symfony/tree/master/Symfony1



Technologies :

Le blog est responsive et gere l'affichage sur mobile.

Les technologies utilisées :

Symfony 3 : Pour l'apprentissage du framework
  
Bootstrap : Pour la chartre graphique ainsi que le reponsive
  
HTML 5 / CSS 3
  
  


How to Work with Form Themes

http://symfony.com/doc/current/form/form_themes.html


Twig ex: 


{# app/Resources/views/form/fields.html.twig #}
{% block form_row %}
{% spaceless %}
    <div class="form_row">
        {{ form_label(form) }}
        {{ form_errors(form) }}
        {{ form_widget(form) }}
    </div>
{% endspaceless %}
{% endblock form_row %}






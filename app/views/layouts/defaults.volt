<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ title ? title|e|striptags : 'Untitled' }}</title>
    {{stylesheet_link('css/bootstrap/bootstrap.min.css')}}

</head>

<body>
    <div class="container">
        {% block content %}
        {% endblock %}
    </div>
    {{javascript_include('js/jquery.min.js')}}
    {{javascript_include('js/bootstrap/bootstrap.min.js')}}
</body>

</html>
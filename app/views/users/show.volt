{% extends 'layouts/defaults.volt' %}

{% block content %}
<br />
User Detail
<br><br>
<table width="100%">
    <tr>
        <td>Username</td>
        <td>:</td>
        <td>{{ users.username }}</td>
    </tr>
    <tr>
        <td>Password</td>
        <td>:</td>
        <td>{{ users.password }}</td>
    </tr>
    <tr>
        <td>Level</td>
        <td>:</td>
        <td>{{ users.level }}</td>
    </tr>
</table>
<br><br>
<button class="btn btn-success" onclick="window.location.href='../users'">Back</button>
{% endblock %}
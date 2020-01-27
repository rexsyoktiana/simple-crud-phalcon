{% extends 'layouts/defaults.volt' %}

{% block content %}
<br />

<div class="mb-1">Hello All</div>
<?php echo $this->flashSession->output() ?>
<div class="row">
    <div class="col-md-12">
        user list:
        <br><br>
        <table class="table table-bordered table-hover" style="width:50%">
            <tr>
                <th>Username</th>
                <th>Action</th>
            </tr>
            {% for user in users %}
            <tr>
                <td>{{ user.username }}</td>
                <td><a href="users/{{ user.id_user }}">show</a> || <a href="users/edit/{{ user.id_user }}">edit</a> || <a href="users/delete/{{ user.id_user }}">delete</a></td>
            </tr>
            {% endfor %}
        </table>

    </div>
</div>
<br>
<button class="btn btn-success" onclick="window.location.href='users/create'">Create</button>
{% endblock %}
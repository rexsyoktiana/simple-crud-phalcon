{% extends 'layouts/defaults.volt' %}


{% block content %}
<br />
Hello {{users.username}}!!!
<br><br>
<div class="row">
    <div class="col-md-12">
        <form method="POST">
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" class="form-control" placeholder="Type your username" required
                    value="{{ users.username }}">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" placeholder="Type your password" required
                    value="{{ users.password }}">
            </div>
            <div class="form-group">
                <label>Level</label>
                <textarea name="level" class="form-control" placeholder="Type your level"
                    required>{{ users.level }}</textarea>
            </div>
            <button type="button" class="btn btn-secondary" onclick="window.location.href='../../users'">Cancel</button>
            <input type="submit" value="Save" class="btn btn-success"> 
        </form>
    </div>
</div>
{% endblock %}
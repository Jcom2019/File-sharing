<div class="card" id="dashboard">
    <div class="card-header" id="dashboard-header"><b>User Dashboard</b></div>
    <div class="card-body" id="dashboard-content">
        <form action = "{!!action('PagesController@Upload')!!}" method="POST">
            @csrf
            <button class="btn btn-primary" style="width:70%">SEND FILES</button>
        </form>
        <form action = "{!!action('UsersController@viewReceivedFiles')!!}" method="POST">
                @csrf
                <br><button class="btn btn-primary" style="width:70%">VIEW RECEIVED FILES</button>
                <input type="hidden" name="_method" value="GET">
        </form>
    </div>
</div>

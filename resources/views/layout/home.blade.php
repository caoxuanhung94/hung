<link href="{{ asset('Css/style.css') }}" rel="stylesheet">
<div id="header" >
    <h1>header</h1>
</div>
<div id="body" >
    <h1>day la trang home</h1>
    <table>
        <tr>
            <th>id</th>
            <th>email</th>
            <th>name</th>
            <th>money</th>
        </tr>
        <?php
        foreach ($users as $user) {
            echo "<tr>";
                echo "<td>";
                    echo $user->id;
                echo "</td>";
                echo "<td>";
                    echo $user->email;
                echo "</td>";
                echo "<td>";
                    echo $user->name;
                echo "</td>";
                echo "<td>";
                    echo $user->money;
                echo "</td>";
            echo "</tr>";
        }
        ?>
    </table>
</div>
<div id="footer" >
    <h1>footer</h1>
</div>
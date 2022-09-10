<link href="{{ asset('Css/style.css') }}" rel="stylesheet">
<div id="header" >
    <h1>header</h1>
</div>
<div id="body" >
    <h1>Quan ly san pham</h1>
    <table>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>price</th>
        </tr>
        <?php
        foreach ($products as $product) {
            echo "<tr>";
                echo "<td>";
                    echo $product->id;
                echo "</td>";
                echo "<td>";
                    echo $product->name;
                echo "</td>";
                echo "<td>";
                    echo $product->price_sale;
                echo "</td>";
            echo "</tr>";
        }
        ?>
    </table>
</div>
<div id="footer" >
    <h1>footer</h1>
</div>
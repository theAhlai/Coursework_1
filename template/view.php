

<table>
    <thead>
        <tr>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Email</th>
            <th>Operation</th>
        </tr>
    </thead>
    <tbody>
        <?php
            include_once '../script/view.php';
            if(isset($_SESSION['allusers'])){
                $allusers = $_SESSION['allusers'];
                foreach($allusers as $individualUser){
                    echo "<tr>";
                    echo "<td>" . $individualUser['firstname'] . "</td>";
                    echo "<td>" . $individualUser['lastname'] . "</td>";
                    echo "<td>" . $individualUser['email'] . "</td>";
                    echo "<td>" . "<a href='update.php?email=$individualUser[email]&firstname=$individualUser[firstname]&lastname=$individualUser[lastname]'><button>Edit</button></a>" . "</td>";
                    echo "<td>" . "<a href='../script/delete.php?email=$individualUser[email]'><button>Delete</button></a>" . "</td>";
                    echo "</tr>";
                }
            }
        ?>
    </tbody>
</table>
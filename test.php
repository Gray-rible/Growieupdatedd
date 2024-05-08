 <?php
        // List all files in the "uploads" directory
        $files = scandir("uploads");
        foreach ($files as $file) {
            if ($file != "." && $file != "..") {
                echo "<li><a href='uploads/$file'>$file</a> ";
                echo "<a href='edit.php?filename=$file'>Edit</a> ";
                echo "<a href='delete.php?filename=$file'>Delete</a> ";
                echo "<a href='rename.php?filename=$file'>Rename</a></li>";
            }
        }
        ?>
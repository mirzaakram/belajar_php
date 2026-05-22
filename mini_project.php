<from method="POST">
    <input name="nama">
    <button>kirim</button>
</from>

<?php
if (isset($_POST['nama'])) {
    echo "halo " .$_POST['nama'];
}
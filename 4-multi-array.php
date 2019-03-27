<?php
    $ub = array(
      "Fakultas Ilmu Komputer" => array(
                                    array(
                                        "Jurusan Teknik Informatika",
                                        array(
                                            "Prodi Teknik Informatika",
                                            "Prodi Teknik Komputer",
                                            "Prodi Magister Ilmu Komputer"
                                        )
                                    ),
                                    array(
                                        "Jurusan Sistem Informasi",
                                        array(
                                            "Prodi Sistem Informasi",
                                            "Prodi Teknologi Informasi",
                                            "Prodi Pendidikan Teknologi Informasi"
                                        )
                                    ),
                                    array(
                                        "Jurusan Manajemen Informatika",
                                        array(
                                            "Prodi Manajemen Informasi",
                                            "Prodi Web Design",
                                            "Prodi Pendidikan Managemen"
                                        )
                                    )
                                ),
  );

 ?>

 <table>
      <tr>
        <th>Fakultas</th>
        <th>Jurusan</th>
        <th>Program Studi</th>
      </tr>

<?php
foreach($ub as $fakultas => $jurusan) {
    $fakultasLine = true;

    $insideRows = 0;
    foreach($jurusan as $program) {
        foreach($program[1] as $studi) {
            $insideRows++;
        }
    }
    foreach($jurusan as $program) {
        $jurusanLine = true;
        foreach($program[1] as $studi) {
            echo '<tr>';
            if($fakultasLine) {
                echo '<td rowspan="' . $insideRows . '">' . $fakultas . '</td>';
                $fakultasLine = false;
            }
            if($jurusanLine) {
                echo '<td rowspan="' . count($program[1]) . '">' . $program[0] . '</td>';
                $jurusanLine = false;
            }
            echo '<td>' . $studi . '</td>';
            echo '</tr>';
        }
    }
}
?>
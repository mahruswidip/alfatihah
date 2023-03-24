i have this table

<tbody>
    <?php
                                                // create an empty array to store the grouped rows
                                                $groupedRows = array();

                                                $link = site_url("pesanan/detail_pengiriman/" . $pesanan['id_pesanan']);

                                                // loop through the pengiriman data and group the rows by their tanggal_kirim value
                                                foreach ($pengiriman as $p) {
                                                    $tanggal_kirim = $p['tanggal_kirim'];

                                                    // if the group for this tanggal_kirim does not exist, create a new one
                                                    if (!isset($groupedRows[$tanggal_kirim])) {
                                                        $groupedRows[$tanggal_kirim] = array();
                                                    }

                                                    // add the current row to the group for this tanggal_kirim
                                                    $groupedRows[$tanggal_kirim][] = $p;
                                                }

                                                // loop through the grouped rows and display them in the table
                                                $no = 1;
                                                foreach ($groupedRows as $tanggal_kirim => $rows) {
                                                    $rowspan = count($rows);
                                                    echo '<tr>';
                                                    echo '<td rowspan="' . $rowspan . '">' . $no++ . '</td>';
                                                    echo '<td rowspan="' . $rowspan . '">' . $tanggalConverted = date_format(date_create($tanggal_kirim), 'd F Y') . '</td>';
                                                    echo '<td>' . $rows[0]['nama_barang'] . '</td>';
                                                    echo '<td>' . $rows[0]['jumlah_kirim'] . '&nbsp' . $rows[0]['satuan'] . '</td>';
                                                    echo '<td rowspan="' . $rowspan . '"><a href="' . $link  . '" class="btn btn-warning"><span class="fa fa-print"></span> &nbsp Cetak</a></td>'; // add the print button here
                                                echo '</tr>';
                                                for ($i = 1; $i < $rowspan; $i++) { echo '<tr>' ; echo '<td>' .
                                                    $rows[$i]['nama_barang'] . '</td>' ; echo '<td>' .
                                                    $rows[$i]['jumlah_kirim'] . '&nbsp' . $rows[$i]['satuan'] . '</td>'
                                                    ; echo '</tr>' ; } } ?>
</tbody>
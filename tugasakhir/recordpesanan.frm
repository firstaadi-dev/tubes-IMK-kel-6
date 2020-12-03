TYPE=VIEW
query=select `a`.`id` AS `id`,`a`.`namaPelanggan` AS `namaPelanggan`,`a`.`nomorInvoice` AS `nomorInvoice`,`b`.`nama` AS `nama`,`b`.`harga` AS `harga`,`a`.`jumlahBarang` AS `jumlahBarang` from (`tugasakhir`.`invoice` `a` join `tugasakhir`.`barang` `b` on(`a`.`id_barang` = `b`.`id`))
md5=59ff2d77f4247dadcdd51a93e14634ac
updatable=1
algorithm=0
definer_user=root
definer_host=localhost
suid=1
with_check_option=0
timestamp=2020-11-19 03:16:06
create-version=2
source=select `a`.`id` AS `id`,`a`.`namaPelanggan` AS `namaPelanggan`,`a`.`nomorInvoice` AS `nomorInvoice`,`b`.`nama` AS `nama`,`b`.`harga` AS `harga`,`a`.`jumlahBarang` AS `jumlahBarang` from (`tugasakhir`.`invoice` `a` join `tugasakhir`.`barang` `b` on(`a`.`id_barang` = `b`.`id`))
client_cs_name=utf8mb4
connection_cl_name=utf8mb4_unicode_ci
view_body_utf8=select `a`.`id` AS `id`,`a`.`namaPelanggan` AS `namaPelanggan`,`a`.`nomorInvoice` AS `nomorInvoice`,`b`.`nama` AS `nama`,`b`.`harga` AS `harga`,`a`.`jumlahBarang` AS `jumlahBarang` from (`tugasakhir`.`invoice` `a` join `tugasakhir`.`barang` `b` on(`a`.`id_barang` = `b`.`id`))
mariadb-version=100414

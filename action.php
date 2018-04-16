<?php echo htmlspecialchars($_POST['name']); ?>씨 안녕하세요.</br>
<?php echo htmlspecialchars($_POST['depart']); ?>일 <?php echo htmlspecialchars($_POST['genre']); ?>시에 
<?php echo htmlspecialchars($_POST['chef']); ?>
아래와 같이 예약 되었습니다.</br>   
사전 확인 사항:<?php echo htmlspecialchars($_POST['service']); ?>
<?php
 $aservice = $_POST['service'];



변경사항이 있으면 <?php echo (int)$_POST['phone']; ?>으로 연락드리겠습니다. </br>

저에게 "<?php echo htmlspecialchars($_POST['comments']); ?>"이라고 말씀하셨군요</br>
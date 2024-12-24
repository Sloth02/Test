<?php
        include"dbcon.php";
        if(isset($_REQUEST['bSubmitRoom'])){
                $firstname=$_REQUEST['tfirstname'];
                $lastname=$_REQUEST['tlastname'];
                $email=$_REQUEST['temail'];
                $address=$_REQUEST['taddress'];
                echo $firstname.$lastname.$email.$address;
                $sql="INSERT INTO tbroom VALUE(null,'$firstname','$lastname','$email','$address')";
                $query=$conn->query($sql);
                echo "<META HTTP-EQUIV='refresh'CONTENT='3; URL=lab2-2.php'>";

        }elseif(isset($_REQUEST['bSubmitRoom'])){
                $roomname=$_REQUEST['troomname'];
                $detail=$_REQUEST['tdetail'];
                $roomtype=$_REQUEST['troomtype'];
                echo $roomname.$detail.$roomtype;
                $sql="INSERT INTO tbroom VALUE(null,'$roomname','$detail','$roomtype')";
                $query=$conn->query($sql);
                echo "<META HTTP-EQUIV='refresh'CONTENT='1; URL=lab3-2.php'>";

        }elseif(isset($_REQUEST['Submitbook'])){
                $bookname=$_REQUEST['tbookname'];
                $author=$_REQUEST['tauthor'];
                $price=$_REQUEST['tprice'];
                $stock=$_REQUEST['tstock'];
                $booktypeid=$_REQUEST['tbooktypeid'];
                $sql="INSERT INTO tbbook VALUE(null,'$bookname','$author','$price','$stock','$booktypeid')";
                $query=$conn->query($sql);
                echo "<META HTTP-EQUIV='refresh'CONTENT='1; URL=home.php'>";

        }elseif(isset($_REQUEST['Savepassword'])){
                $firstname=$_REQUEST['firstname'];
                $lastname=$_REQUEST['lastname'];
                $username=$_REQUEST['username'];
                $password=$_REQUEST['password'];
                $hashValue = md5($password);
                $sql="INSERT INTO tbuser VALUE(null,'$firstname','$lastname','$username','$hashValue')";
                $query=$conn->query($sql);
                echo "<META HTTP-EQUIV='refresh'CONTENT='3; URL=lab_function/lab-formregis.php'>";
        
        }elseif(isset($_REQUEST['bLogin'])){
                $username=$_REQUEST['username'];
                $password= md5($_REQUEST['password']);
                $sql="SELECT *FROM tbuser WHERE username='$username' and password='$password'";
                $query=$conn->query($sql);
                $rs=$query->fetch_object();
                $numrows=$query->num_rows;
                if($numrows>0){
                echo'ล็อคอินสำเร็จ';
                }else{
                echo 'รหัสไม่ถูกต้อง';
                }
                echo "<META HTTP-EQUIV='refresh'CONTENT='3; URL=lab_function/lab-formlogin.php'>";
        }

?>
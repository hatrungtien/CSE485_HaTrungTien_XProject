<?php
include "lib/DBConnection.php";
include "app/models/User.php";
class UserRepository{

    public function getAllUsers(){
        //Mật khẩu lưu THÔ, chưa băm trong CSDL
        //Kết nối tới CSDL: MySQLi procedural, MySQLi OOP, PDO*
        //1. Kết nối DB Server
        try {
            $db = new DBConnection();
            $conn = $db->connect();
            //2. Thực hiện truy vấn
            $sql = "SELECT * FROM users";
//            $sql = "SELECT username FROM users WHERE email=:e AND password=:p";
            $stmt = $conn->prepare($sql); //Chuẩn bị thực hiện câu này
            $stmt->execute(); //Thực thi đi >>> Nếu có kết quả trả về, nó sẽ lưu vào #stmt
            //3. Xử lý kết quả (SELECT/INSERT-UPDATE-DELETE)
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            //            $result = $stmt->fetch(); >> Chỉ lấy ra 1 bản ghi mỗi lần chạy
            $result = $stmt->fetchAll(); //>> Lấy ra tất cả >>> Mảng các Mảng
            //            Chuyển đổi Bản ghi (Mảng thông thường) sang Đối tượng: Post

            $users = [];
            foreach($result as $row){
//                echo $row['post_id'];
                $user = new User();
                $user->setUserId($row['user_id']);
                $user->setEmail($row['email']);
                $user->setPassword($row['password']);
                $user->setUsername($row['user_name']);
                $user->setCreatedAt($row['created_at']);
                $user->setBio($row['bio']);
                $user->setProfilePicture($row['profile_picture']);
                $user->setUpdatedAt($row['updated_at']);
                array_push($users, $user);
            }
            return $users;
        } catch(PDOException $e) {
            return null;
        }
    }
    public function checkLogin($user, $pass){
        //Mật khẩu lưu THÔ, chưa băm trong CSDL
        //Kết nối tới CSDL: MySQLi procedural, MySQLi OOP, PDO*
        //1. Kết nối DB Server
        try {
            $db = new DBConnection();
            $conn = $db->connect();
            //2. Thực hiện truy vấn
            $sql = "SELECT username FROM users WHERE email=? AND password=?";
//            $sql = "SELECT username FROM users WHERE email=:e AND password=:p";
            $stmt = $conn->prepare($sql); //Chuẩn bị thực hiện câu này
            $stmt->bindParam('ss', $user, $pass);
            $stmt->execute(); //Thực thi đi >>> Nếu có kết quả trả về, nó sẽ lưu vào #stmt
            //3. Xử lý kết quả (SELECT/INSERT-UPDATE-DELETE)
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            //            $result = $stmt->fetch(); >> Chỉ lấy ra 1 bản ghi mỗi lần chạy
            $result = $stmt->fetch(); //>> Lấy ra tất cả >>> Mảng các Mảng
            //            Chuyển đổi Bản ghi (Mảng thông thường) sang Đối tượng: Post

            //4. Đóng kết nối
            $conn = null;
            //Trả về Kết qủa cho HÀM
            if(count($result) > 0){
                return true;
            }else{
                return false;
            }
        } catch(PDOException $e) {
            return null;
        }
    }

    public function saveRegister($user){
        //Kết nối tới CSDL: MySQLi procedural, MySQLi OOP, PDO*
        //1. Kết nối DB Server
        try {
            $db = new DBConnection();
            $conn = $db->connect();
            //2. Thực hiện truy vấn
            //Tạm thời bỏ qua kiểm tra
            $sql = "INSERT INTO users (user_id, user_name, email, password) VALUES (107, ?, ?, ?)";
            $stmt = $conn->prepare($sql); //Chuẩn bị thực hiện câu này
            $username = $user->getUsername();
            $email = $user->getEmail();
            $pass = $user->getPassword();
//            $stmt->bindParam('sss', $user->getUsername(), $user->getEmail(), $user->getPassword() );
            $stmt->bindParam(1, $username, PDO::PARAM_STR);
            $stmt->bindParam(2, $email, PDO::PARAM_STR);
            $stmt->bindParam(3, $pass, PDO::PARAM_STR);
            //3. Xử lý kết quả (SELECT/INSERT-UPDATE-DELETE)
            if($stmt->execute())
                return true;

        } catch(PDOException $e) {
            return false;
        }
    }

}

?>
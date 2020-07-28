<?php
class Interview
{
    // 面試者編號
    protected $no;
    // 面試者中文名
    protected $name_cn;
    // 面試者英文名
    protected $name_en;
    // 面試者性別
    protected $sex;
    // 面試時間
    protected $time;
    // 應徵職稱
    protected $title;

    public function __construct(array $data = null)
    {
        if (isset($data)) {
            foreach ($data as $key => $value) {
                $this->$key = $value;
            }
        }
    }

    public function setTitle($parm)
    {
        $this->title = $parm;
    }
    public function setTime($parm)
    {
        $this->time = $parm;
    }
    public function setSex($parm)
    {
        $this->sex = $parm;
    }
    public function setNameCN($parm)
    {
        $this->name_en = $parm;
    }
    public function setNameEN($parm)
    {
        $this->name_cn = $parm;
    }
    public function setNo($parm)
    {
        $this->no = $parm;
    }

    public function getdata()
    {
        echo "應徵職稱：" . $this->title;
        echo "面試時間：" . $this->time;
        echo "面試者編號：" . $this->no;
        echo "面試者中文名：" . $this->name_cn;
        echo " 面試者英文名：" . $this->name_en;
        echo " 面試者性別：" . $this->sex;

    }

}
// $data = ['title' => 'PHP', 'time' => '2020-07-28', 'name_cn' => '張瓊文', 'name_en' => 'Joanna', 'sex' => '女'];
// $a = new Interview($data);
// $a->getdata();
// echo "<br>";
// var_dump($a);
// echo "<br>";
// $b = new Interview();
// $b->setTitle("PHP工程師");
// $b->setTime("2020-07-28");
// $b->setNo("2");
// $b->setNameCN("張瓊文");
// $b->setNameEN("Joanna");
// $b->setSex("女");
// $b->getdata();
// echo "<br>";
// var_dump($b);
// // $cartoon->disName();

// $row['car'] = ['title' => 'PHP', 'time' => '2020-07-28', 'name_cn' => '張瓊文', 'name_en' => 'Joanna', 'sex' => '女'];
$row['car'] = "asdfaf";
if (is_array($row['car'])) {
    foreach ($row['car'] as $item) {
        echo $item . ',';
    }
} else {
    echo $row['car'] . ',';
}

if (!isset($_SERVER['PHP_AUTH_USER'])) {
    header('WWW-Authenticate: Basic realm="qqq"');
    header('HTTP/1.0 401 Unauthorized');
    $header = json_encode(['type' => 'F', 'msg' => '傳送失敗1']);
    echo $header;
    exit;
} else {
    $output = ['type' => 'Y', 'msg' => '傳送成功2'];
    if ($_SERVER['PHP_AUTH_USER'] == "admin" && $_SERVER['PHP_AUTH_PW'] == "1234") {
        $output = ['type' => 'Y', 'msg' => '傳送成功3'];
    } else {
        $output = ['type' => 'Y', 'msg' => '傳送成功4'];
    }
    echo json_encode($output);
}

$total = rand(0, 300);
$vip = 0;
echo $total . "開始<br>";
switch ($total) {
    case ($total == 0):
        $vip = 0;
        break;
    case ($total >= 200):
        $vip++;
    // break;
    case ($total < 200 && $total >= 100):
        $vip++;
    // break;
    case ($total < 100):
        $vip++;
        // break;

}
// echo $vip;

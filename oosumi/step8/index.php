<!DOCTYPE HTML>
<html lang="ja">
    <head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
        <meta charset="UTF-8">
    </head>
    <?php
    $name = array('大住', '遥');
            const BIRTHDAY = '1989年4月10日';
    $sélf_introdúction = "初めまして。$name[0]と申します。まだまだ何も出来ませんが頑張っていきたいと思います。";
    $hobby = array('ギター', '読書');
    $detail = array(
        array('Takamine', 'ibanez'),
        array('湊かなえ', '乙一')
    );
    $today = Date("Y/m/d/h/i/s");
    $count = 1;

    $prfile = array(
        '紹介' => '-自己紹介-<br/>',
        '時刻' => "【現在時刻】{$today}<br/>",
        '姓' => "【姓】$name[0]<br/>",
        '名' => "【名】$name[1]<br/>",
        '歳' => "【生年月日】" . BIRTHDAY . " <br/>",
        '一言' => "【一言】{$sélf_introdúction}</br>",
        '趣味' => "【趣味】趣味は$hobby[0]と$hobby[1]です。使っている$hobby[0]は" . $detail[0][0] . "と" . $detail[0][1] . "で、好きな作家は" . $detail[1][0] . "と" . $detail[1][1] . "です。"
    );

    for ($i = 1; $i <=10; $i++) {
        
        echo "{$i}回目の表示です。<br/>";
        echo $prfile['紹介'];
        echo $prfile['時刻'];
        echo $prfile['姓'];
        echo $prfile['名'];
        echo $prfile['歳'];
        echo $prfile['一言'];
        echo $prfile['趣味'];
        echo "<br/>";
        echo "<br/>";
        
    }
    ?>
    <br>
    <br>
    <?php
    

$a = array (22	,
40	,
17	,
33	,
5	,
91	,
49	,
83	,
27	,
4	,
50	,
90	,
10	,
0	,
6	,
35	,
72	,
79	,
9	,
32	,
14	,
97	,
96	,
65	,
77	,
21	,
46	,
23	,
76	,
24	,
19	,
55	,
18	,
85	,
56	,
1	,
38	,
98	,
51	,
81	,
64	,
47	,
68	,
71	,
3	,
74	,
99	,
62	,
28	,
20	,
52	,
13	,
94	,
36	,
29	,
7	,
31	,
39	,
92	,
54	,
66	,
57	,
34	,
95	,
15	,
43	,
69	,
78	,
67	,
8	,
86	,
41	,
58	,
93	,
59	,
48	,
61	,
89	,
12	,
16	,
44	,
53	,
25	,
80	,
75	,
42	,
60	,
88	,
2	,
87	,
82	,
11	,
73	,
63	,
70	,
100	,
26	,
30	,
45	,
37	,
84	);

$A = $a;

sort($A);
print_r($A);

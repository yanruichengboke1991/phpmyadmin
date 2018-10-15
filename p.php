<?php
header("content-type:text/html;charset=utf-8");

// $msg['msg'] = 'aaa';
// $msg['status'] = 'bbb';
// echo json_encode($msg);

$str ="
                {
                'header':{'agent': \"WEB20",
                        'bfw-ctrl': \"json",
                        'device': \"Chrome 69.0.3497.100",
                        'ext': "",
                        'local': "zh_CN",
                        'mac': "",
                        'page': "",
                        'platform': 'Microsoft,Windows,10',
                        'plugins': "",
                        'serial': "",
                        'version': "BOCNETC-D-WENT_V01.00_PTF30"
                        }
                },
                {'request':{
                    0:{'id': 36,
                        'method': "EntOprAccountQueryList",
                        'params':{'functionId': 'EF1692.EF1693.EF1691.EF1571.EF5071.EF5081.EF5082.EF5061.EF5162.EF1581.EF5091.EF1591.EF1593.EF159B.EF1594.EF1599.EF1595.EF1596.EF1597.EF1592.EF1661.EF1662.EF1665.EF1631.EF1635.EF1632.EF1641.EF1645.EF1642.EF1647.EF1651.EF1652.EF1654.EF1655.EF1621.EF1622.EF1623.EF1624.EF5161.EF1684.EF1681.EF1682.EF5051.EF5052.EF5171'}
                       }
                   }
                }
                ";
                $b = json_decode($str);

                var_dump($b);

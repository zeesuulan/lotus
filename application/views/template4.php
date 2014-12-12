<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>2年级</title>
    <?=setCSS(array( "bootstrap.min.css", "template.css"))?>
</head>

<body>
    <?php foreach ($data as $key=>$s) {?>
    <div align="center" class="w3cbbs">
        <h3 align="center">
            《国家学生体质健康标准》登记卡（小学3～4年级）
        </h3>
        <div id="school">
                学校： <u><?=$school?></u>
        </div>
    <table border="1" cellspacing="0" cellpadding="0">
        <tbody>
            <tr>
                <td width="73">
                    <p align="center">
                        <strong>姓 名</strong>
                    </p>
                </td>
                <td width="147" colspan="3">
                    <p align="center">
                        <strong><?=$s[5]?></strong>
                    </p>
                </td>
                <td width="73" colspan="3">
                    <p align="center">
                        <strong>性 别</strong>
                    </p>
                </td>
                <td width="147" colspan="2">
                    <p align="center">
                        <strong><?=gender($s[6])?></strong>
                    </p>
                </td>
                <td width="73" colspan="2">
                    <p align="center">
                        <strong>学 号</strong>
                    </p>
                </td>
                <td width="147" colspan="4">
                    <p align="center">
                        <strong><?=$s[3]?></strong>
                    </p>
                </td>
            </tr>
            <tr>
                <td width="73">
                    <p align="center">
                        <strong>班 级</strong>
                    </p>
                </td>
                <td width="147" colspan="3">
                    <p align="center">
                        <strong><?=$s[2]?></strong>
                    </p>
                </td>
                <td width="73" colspan="3">
                    <p align="center">
                        <strong>民 族</strong>
                    </p>
                </td>
                <td width="147" colspan="2">
                    <p align="center">
                        <strong><?=race($s[4])?></strong>
                    </p>
                </td>
                <td width="73" colspan="2">
                    <p align="center">
                        <strong>出生日期</strong>
                    </p>
                </td>
                <td width="147" colspan="4">
                    <p align="center">
                        <strong><?=birthday($s[7])?></strong>
                    </p>
                </td>
            </tr>
            <tr>
                <td width="132" colspan="2" rowspan="2">
                    <p align="center">
                        <strong>单项指标</strong>
                    </p>
                </td>
                <td width="198" colspan="6">
                    <p align="center">
                        <strong>三年级</strong>
                    </p>
                </td>
                <td width="132" colspan="2" rowspan="2">
                    <p align="center">
                        <strong>单项指标</strong>
                    </p>
                </td>
                <td width="198" colspan="5">
                    <p align="center">
                        <strong>四年级</strong>
                    </p>
                </td>
            </tr>
            <tr>
                <td width="66">
                    <p align="center">
                        <strong>成绩</strong>
                    </p>
                </td>
                <td width="66" colspan="3">
                    <p align="center">
                        <strong>得分</strong>
                    </p>
                </td>
                <td width="66" colspan="2">
                    <p align="center">
                        <strong>等级</strong>
                    </p>
                </td>
                <td width="66" colspan="2">
                    <p align="center">
                        <strong>成绩</strong>
                    </p>
                </td>
                <td width="66" colspan="2">
                    <p align="center">
                        <strong>得分</strong>
                    </p>
                </td>
                <td width="66">
                    <p align="center">
                        <strong>等级</strong>
                    </p>
                </td>
            </tr>
            <tr>
                <td width="132" colspan="2">
                    <p align="center">
                        体重指数（BMI）
                    </p>
                    <p align="center">
                        （单位：千克/米<sup>2</sup>）
                    </p>
                </td>
                <td width="66">
                </td>
                <td width="66" colspan="3">
                </td>
                <td width="66" colspan="2">
                </td>
                <td width="132" colspan="2">
                    <p align="center">
                        体重指数（BMI）
                    </p>
                    <p align="center">
                        （单位：千克/米<sup>2</sup>）
                    </p>
                </td>
                <td width="66" colspan="2">
                    <?=bmi($s[9], $s[10])?>
                </td>
                <td width="66" colspan="2">
                    <?=$s[11]?>
                </td>
                <td width="66">
                    <?=$s[12]?>
                </td>
            </tr>
            <tr>
                <td width="132" colspan="2">
                    <p align="center">
                        肺活量
                    </p>
                    <p align="center">
                        （单位：毫升）
                    </p>
                </td>
                <td width="66">
                </td>
                <td width="66" colspan="3">
                </td>
                <td width="66" colspan="2">
                </td>
                <td width="132" colspan="2">
                    <p align="center">
                        肺活量
                    </p>
                    <p align="center">
                        （单位：毫升）
                    </p>
                </td>
                <td width="66" colspan="2">
                    <?=$s[13]?>
                </td>
                <td width="66" colspan="2">
                    <?=$s[14]?>
                </td>
                <td width="66">
                    <?=$s[15]?>
                </td>
            </tr>
            <tr>
                <td width="132" colspan="2">
                    <p align="center">
                        50米跑
                    </p>
                    <p align="center">
                        （单位：秒）
                    </p>
                </td>
                <td width="66">
                </td>
                <td width="66" colspan="3">
                </td>
                <td width="66" colspan="2">
                </td>
                <td width="132" colspan="2">
                    <p align="center">
                        50米跑
                    </p>
                    <p align="center">
                        （单位：秒）
                    </p>
                </td>
                <td width="66" colspan="2">
                    <?=$s[16]?>
                </td>
                <td width="66" colspan="2">
                    <?=$s[17]?>
                </td>
                <td width="66">
                    <?=$s[18]?>
                </td>
            </tr>
            <tr>
                <td width="132" colspan="2">
                    <p align="center">
                        坐位体前屈
                    </p>
                    <p align="center">
                        （单位：厘米）
                    </p>
                </td>
                <td width="66">
                </td>
                <td width="66" colspan="3">
                </td>
                <td width="66" colspan="2">
                </td>
                <td width="132" colspan="2">
                    <p align="center">
                        坐位体前屈
                    </p>
                    <p align="center">
                        （单位：厘米）
                    </p>
                </td>
                <td width="66" colspan="2">
                    <?=$s[19]?>
                </td>
                <td width="66" colspan="2">
                    <?=$s[20]?>
                </td>
                <td width="66">
                    <?=$s[21]?>
                </td>
            </tr>
            <tr>
                <td width="132" colspan="2">
                    <p align="center">
                        1分钟跳绳
                    </p>
                    <p align="center">
                        （单位：次）
                    </p>
                </td>
                <td width="66">
                </td>
                <td width="66" colspan="3">
                </td>
                <td width="66" colspan="2">
                </td>
                <td width="132" colspan="2">
                    <p align="center">
                        1分钟跳绳
                    </p>
                    <p align="center">
                        （单位：次）
                    </p>
                </td>
                <td width="66" colspan="2">
                    <?=$s[26]?>
                </td>
                <td width="66" colspan="2">
                    <?=$s[27]?>
                </td>
                <td width="66">
                    <?=$s[28]?>
                </td>
            </tr>
            <tr>
                <td width="132" colspan="2">
                    <p align="center">
                        1分钟仰卧起坐
                    </p>
                    <p align="center">
                        （单位：次）
                    </p>
                </td>
                <td width="66">
                </td>
                <td width="66" colspan="3">
                </td>
                <td width="66" colspan="2">
                </td>
                <td width="132" colspan="2">
                    <p align="center">
                        1分钟仰卧起坐
                    </p>
                    <p align="center">
                        （单位：次）
                    </p>
                </td>
                <td width="66" colspan="2">
                    <?=$s[22]?>
                </td>
                <td width="66" colspan="2">
                    <?=$s[23]?>
                </td>
                <td width="66">
                    <?=$s[24]?>
                </td>
            </tr>
            <tr>
                <td width="132" colspan="2">
                    <p align="center">
                        <strong>标准分</strong>
                    </p>
                </td>
                <td width="198" colspan="6">
                    <p align="center">
                        <strong></strong>
                    </p>
                </td>
                <td width="132" colspan="2">
                    <p align="center">
                        <strong>标准分</strong>
                    </p>
                </td>
                <td width="198" colspan="5">
                    <p align="center">
                        <strong><?=$s[30]?></strong>
                    </p>
                </td>
            </tr>
            <tr>
                <td width="132" colspan="2">
                    <p align="center">
                        <strong>加分指标</strong>
                    </p>
                </td>
                <td width="99" colspan="3">
                    <p align="center">
                        <strong>成绩</strong>
                    </p>
                </td>
                <td width="99" colspan="3">
                    <p align="center">
                        <strong>附加分</strong>
                    </p>
                </td>
                <td width="132" colspan="2">
                    <p align="center">
                        <strong>加分指标</strong>
                    </p>
                </td>
                <td width="99" colspan="3">
                    <p align="center">
                        <strong>成绩</strong>
                    </p>
                </td>
                <td width="99" colspan="2">
                    <p align="center">
                        <strong>附加分</strong>
                    </p>
                </td>
            </tr>
            <tr>
                <td width="132" colspan="2">
                    <p align="center">
                        1分钟跳绳
                    </p>
                    <p align="center">
                        （单位：次）
                    </p>
                </td>
                <td width="99" colspan="3">
                </td>
                <td width="99" colspan="3">
                </td>
                <td width="132" colspan="2">
                    <p align="center">
                        1分钟跳绳
                    </p>
                    <p align="center">
                        （单位：次）
                    </p>
                </td>
                <td width="99" colspan="3">
                </td>
                <td width="99" colspan="2">
                </td>
            </tr>
            <tr>
                <td width="132" colspan="2">
                    <p align="center">
                        <strong>学年总分</strong>
                    </p>
                </td>
                <td width="198" colspan="6">
                    <p align="center">
                        <strong></strong>
                    </p>
                </td>
                <td width="132" colspan="2">
                    <p align="center">
                        <strong>学年总分</strong>
                    </p>
                </td>
                <td width="198" colspan="5">
                    <p align="center">
                        <strong><?=$s[31]?></strong>
                    </p>
                </td>
            </tr>
            <tr>
                <td width="132" colspan="2">
                    <p align="center">
                        <strong>等级评定</strong>
                    </p>
                </td>
                <td width="198" colspan="6">
                    <p align="center">
                        <strong></strong>
                    </p>
                </td>
                <td width="132" colspan="2">
                    <p align="center">
                        <strong>等级评定</strong>
                    </p>
                </td>
                <td width="198" colspan="5">
                    <p align="center">
                        <strong><?=$s[32]?></strong>
                    </p>
                </td>
            </tr>
            <tr>
                <td width="132" colspan="2">
                    <p align="center">
                        <strong>体育教师签字</strong>
                        <strong></strong>
                    </p>
                </td>
                <td width="198" colspan="6">
                    <p align="center">
                        <strong></strong>
                    </p>
                </td>
                <td width="132" colspan="2">
                    <p align="center">
                        <strong>体育教师签字</strong>
                        <strong></strong>
                    </p>
                </td>
                <td width="198" colspan="5">
                    <p align="center">
                        <strong></strong>
                    </p>
                </td>
            </tr>
            <tr>
                <td width="132" colspan="2">
                    <p align="center">
                        <strong>班主任签字</strong>
                        <strong></strong>
                    </p>
                </td>
                <td width="198" colspan="6">
                    <p align="center">
                        <strong></strong>
                    </p>
                </td>
                <td width="132" colspan="2">
                    <p align="center">
                        <strong>班主任签字</strong>
                        <strong></strong>
                    </p>
                </td>
                <td width="198" colspan="5">
                    <p align="center">
                        <strong></strong>
                    </p>
                </td>
            </tr>
            <tr>
                <td width="132" colspan="2">
                    <p align="center">
                        <strong>家长签字</strong>
                        <strong></strong>
                    </p>
                </td>
                <td width="198" colspan="6">
                    <p align="center">
                        <strong></strong>
                    </p>
                </td>
                <td width="132" colspan="2">
                    <p align="center">
                        <strong>家长签字</strong>
                        <strong></strong>
                    </p>
                </td>
                <td width="198" colspan="5">
                    <p align="center">
                        <strong></strong>
                    </p>
                </td>
            </tr>
            <tr height="0">
                <td width="73">
                </td>
                <td width="59">
                </td>
                <td width="66">
                </td>
                <td width="22">
                </td>
                <td width="11">
                </td>
                <td width="33">
                </td>
                <td width="29">
                </td>
                <td width="37">
                </td>
                <td width="110">
                </td>
                <td width="22">
                </td>
                <td width="51">
                </td>
                <td width="15">
                </td>
                <td width="33">
                </td>
                <td width="33">
                </td>
                <td width="66">
                </td>
            </tr>
        </tbody>
    </table>
	<div align="right" style="margin-top:10px;">
                <table border="0" cellspacing="0" cellpadding="0">
                    <tbody>
                        <tr>
                            <td width="200">

                            </td>
                            <td width="51">
                                <p>
                                    学校签章：
                                </p>
                            </td>
                            <td width="31">
                            </td>
                            <td width="31">

                            </td>
                        </tr>
                        <tr>
                            <td width="200">
                                <p align="right">

                                </p>
                            </td>
                            <td width="31">
                                <p align="right">
                                </p>
                            </td>
                            <td width="60">
                                <p align="right">2014年11月03日</p>
                            </td>
                            <td width="31">
                                <p align="right">
                                </p>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
    </div>
    <?php } ?>
</body>

</html>

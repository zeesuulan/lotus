<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>56</title>
    <?=setCSS(array( "bootstrap.min.css", "template.css"))?>
</head>

<body>
    <?php foreach ($data as $key=>$s) {?>

    <div align="center" class="w3cbbs">
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
                    <td width="146" colspan="3">
                        <p align="center">
                            <strong>
                                <?=$s[5]?>
                            </strong>
                        </p>
                    </td>
                    <td width="73" colspan="3">
                        <p align="center">
                            <strong>性别</strong>
                        </p>
                    </td>
                    <td width="147" colspan="4">
                        <p align="center">
                            <strong>
                                <?=gender($s[6])?>
                            </strong>
                        </p>
                    </td>
                    <td width="76" colspan="2">
                        <p align="center">
                            <strong>学号</strong>
                        </p>
                    </td>
                    <td width="143" colspan="2">
                        <p align="center">
                            <?=$s[3]?>
                        </p>
                    </td>
                </tr>
                <tr>
                    <td width="73">
                        <p align="center">
                            <strong>班 级</strong>
                        </p>
                    </td>
                    <td width="146" colspan="3">
                        <p align="center">
                            <strong>
                                <?=$s[2]?>
                            </strong>
                        </p>
                    </td>
                    <td width="73" colspan="3">
                        <p align="center">
                            <strong>民族</strong>
                        </p>
                    </td>
                    <td width="147" colspan="4">
                        <p align="center">
                            <strong>
                                <?=race($s[4])?>
                            </strong>
                        </p>
                    </td>
                    <td width="76" colspan="2">
                        <p align="center">
                            <strong>出生日期</strong>
                        </p>
                    </td>
                    <td width="143" colspan="2">
                        <p align="center">
                            <strong>
                                <?=birthday($s[7])?>
                            </strong>
                        </p>
                    </td>
                </tr>
                <tr>
                    <td width="146" colspan="2" rowspan="2">
                        <p align="center">
                            <strong>单项指标</strong>
                        </p>
                    </td>
                    <td width="185" colspan="6">
                        <p align="center">
                            <strong>五年级</strong>
                        </p>
                    </td>
                    <td width="185" colspan="5">
                        <p align="center">
                            <strong>六年级</strong>
                        </p>
                    </td>
                    <td width="143" colspan="2">
                        <p align="center">
                            <strong>毕业成绩</strong>
                        </p>
                    </td>
                </tr>
                <tr>
                    <td width="62">
                        <p align="center">
                            <strong>成绩</strong>
                        </p>
                    </td>
                    <td width="62" colspan="3">
                        <p align="center">
                            <strong>得分</strong>
                        </p>
                    </td>
                    <td width="62" colspan="2">
                        <p align="center">
                            <strong>等级</strong>
                        </p>
                    </td>
                    <td width="62">
                        <p align="center">
                            <strong>成绩</strong>
                        </p>
                    </td>
                    <td width="62" colspan="3">
                        <p align="center">
                            <strong>得分</strong>
                        </p>
                    </td>
                    <td width="62">
                        <p align="center">
                            <strong>等级</strong>
                        </p>
                    </td>
                    <td width="72">
                        <p align="center">
                            <strong>得分</strong>
                        </p>
                    </td>
                    <td width="72">
                        <p align="center">
                            <strong>等级</strong>
                        </p>
                    </td>
                </tr>
                <tr>
                    <td width="146" colspan="2">
                        <p align="center">
                            体重指数（BMI）
                        </p>
                        <p align="center">
                            （单位：千克/米<sup>2</sup>）
                        </p>
                    </td>
                    <td width="62">
                    </td>
                    <td width="62" colspan="3">
                    </td>
                    <td width="62" colspan="2">
                    </td>
                    <td width="62">

                    </td>
                    <td width="62" colspan="3">
                    </td>
                    <td width="62">
                    </td>
                    <td width="72" rowspan="12">
                    </td>
                    <td width="72" rowspan="12">
                    </td>
                </tr>
                <tr>
                    <td width="146" colspan="2">
                        <p align="center">
                            肺活量
                        </p>
                        <p align="center">
                            （单位：毫升）
                        </p>
                    </td>
                    <td width="62">
                    </td>
                    <td width="62" colspan="3">
                    </td>
                    <td width="62" colspan="2">
                    </td>
                    <td width="62">
                        <?=$s[11]?>
                    </td>
                    <td width="62" colspan="3">
                    </td>
                    <td width="62">
                    </td>
                </tr>
                <tr>
                    <td width="146" colspan="2">
                        <p align="center">
                            50米跑
                        </p>
                        <p align="center">
                            （单位：秒）
                        </p>
                    </td>
                    <td width="62">
                    </td>
                    <td width="62" colspan="3">
                    </td>
                    <td width="62" colspan="2">
                    </td>
                    <td width="62">
                        <?=$s[12]?>
                    </td>
                    <td width="62" colspan="3">
                    </td>
                    <td width="62">
                    </td>
                </tr>
                <tr>
                    <td width="146" colspan="2">
                        <p align="center">
                            坐位体前屈
                        </p>
                        <p align="center">
                            （单位：厘米）
                        </p>
                    </td>
                    <td width="62">
                    </td>
                    <td width="62" colspan="3">
                    </td>
                    <td width="62" colspan="2">
                    </td>
                    <td width="62">
                        <?=$s[13]?>
                    </td>
                    <td width="62" colspan="3">
                    </td>
                    <td width="62">
                    </td>
                </tr>
                <tr>
                    <td width="146" colspan="2">
                        <p align="center">
                            1分钟跳绳
                        </p>
                        <p align="center">
                            （单位：次）
                        </p>
                    </td>
                    <td width="62">
                    </td>
                    <td width="62" colspan="3">
                    </td>
                    <td width="62" colspan="2">
                    </td>
                    <td width="62">
                        <?=$s[14]?>
                    </td>
                    <td width="62" colspan="3">
                    </td>
                    <td width="62">
                    </td>
                </tr>
                <tr>
                    <td width="146" colspan="2">
                        <p align="center">
                            1分钟仰卧起坐
                        </p>
                        <p align="center">
                            （单位：次）
                        </p>
                    </td>
                    <td width="62">
                    </td>
                    <td width="62" colspan="3">
                    </td>
                    <td width="62" colspan="2">
                    </td>
                    <td width="62">
                        <?=$s[15]?>
                    </td>
                    <td width="62" colspan="3">
                    </td>
                    <td width="62">
                    </td>
                </tr>
                <tr>
                    <td width="146" colspan="2">
                        <p align="center">
                            50米×8往返跑
                        </p>
                        <p align="center">
                            （单位：分·秒）
                        </p>
                    </td>
                    <td width="62">
                    </td>
                    <td width="62" colspan="3">
                    </td>
                    <td width="62" colspan="2">
                    </td>
                    <td width="62">
                        <?=$s[16]?>
                    </td>
                    <td width="62" colspan="3">
                    </td>
                    <td width="62">
                    </td>
                </tr>
                <tr>
                    <td width="146" colspan="2">
                        <p align="center">
                            <strong>标准分</strong>
                        </p>
                    </td>
                    <td width="185" colspan="6">
                        <p align="center">
                            <strong></strong>
                        </p>
                    </td>
                    <td width="185" colspan="5">
                        <p align="center">
                            <strong></strong>
                        </p>
                    </td>
                </tr>
                <tr>
                    <td width="146" colspan="2">
                        <p align="center">
                            <strong>加分指标</strong>
                        </p>
                    </td>
                    <td width="92" colspan="3">
                        <p align="center">
                            <strong>成绩</strong>
                        </p>
                    </td>
                    <td width="93" colspan="3">
                        <p align="center">
                            <strong>附加分</strong>
                        </p>
                    </td>
                    <td width="92" colspan="2">
                        <p align="center">
                            <strong>成绩</strong>
                        </p>
                    </td>
                    <td width="93" colspan="3">
                        <p align="center">
                            <strong>附加分</strong>
                        </p>
                    </td>
                </tr>
                <tr>
                    <td width="146" colspan="2">
                        <p align="center">
                            1分钟跳绳
                        </p>
                        <p align="center">
                            （单位：次）
                        </p>
                    </td>
                    <td width="92" colspan="3">
                    </td>
                    <td width="93" colspan="3">
                    </td>
                    <td width="92" colspan="2">
                    </td>
                    <td width="93" colspan="3">
                    </td>
                </tr>
                <tr>
                    <td width="146" colspan="2">
                        <p align="center">
                            <strong>学年总分</strong>
                        </p>
                    </td>
                    <td width="185" colspan="6">
                        <p align="center">
                            <strong></strong>
                        </p>
                    </td>
                    <td width="185" colspan="5">
                        <p align="center">
                            <strong></strong>
                        </p>
                    </td>
                </tr>
                <tr>
                    <td width="146" colspan="2">
                        <p align="center">
                            <strong>等级评定</strong>
                        </p>
                    </td>
                    <td width="185" colspan="6">
                        <p align="center">
                            <strong></strong>
                        </p>
                    </td>
                    <td width="185" colspan="5">
                        <p align="center">
                            <strong></strong>
                        </p>
                    </td>
                </tr>
                <tr>
                    <td width="146" colspan="2">
                        <p align="center">
                            <strong>体育教师签字</strong>
                            <strong></strong>
                        </p>
                    </td>
                    <td width="185" colspan="6">
                        <p align="center">
                            <strong></strong>
                        </p>
                    </td>
                    <td width="185" colspan="5">
                        <p align="center">
                            <strong></strong>
                        </p>
                    </td>
                    <td width="143" colspan="2">
                        <p align="center">
                            <strong></strong>
                        </p>
                    </td>
                </tr>
                <tr>
                    <td width="146" colspan="2">
                        <p align="center">
                            <strong>班主任签字</strong>
                            <strong></strong>
                        </p>
                    </td>
                    <td width="185" colspan="6">
                        <p align="center">
                            <strong></strong>
                        </p>
                    </td>
                    <td width="185" colspan="5">
                        <p align="center">
                            <strong></strong>
                        </p>
                    </td>
                    <td width="143" colspan="2">
                        <p align="center">
                            <strong></strong>
                        </p>
                    </td>
                </tr>
                <tr>
                    <td width="146" colspan="2">
                        <p align="center">
                            <strong>家长签字</strong>
                            <strong></strong>
                        </p>
                    </td>
                    <td width="185" colspan="6">
                        <p align="center">
                            <strong></strong>
                        </p>
                    </td>
                    <td width="185" colspan="5">
                        <p align="center">
                            <strong></strong>
                        </p>
                    </td>
                    <td width="143" colspan="2">
                        <p align="center">
                            <strong></strong>
                        </p>
                    </td>
                </tr>
                <tr height="0">
                    <td width="73">
                    </td>
                    <td width="73">
                    </td>
                    <td width="62">
                    </td>
                    <td width="12">
                    </td>
                    <td width="19">
                    </td>
                    <td width="31">
                    </td>
                    <td width="24">
                    </td>
                    <td width="38">
                    </td>
                    <td width="62">
                    </td>
                    <td width="31">
                    </td>
                    <td width="17">
                    </td>
                    <td width="14">
                    </td>
                    <td width="62">
                    </td>
                    <td width="72">
                    </td>
                    <td width="72">
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
                        <td width="31">
                            <p align="right">
                                年&nbsp;&nbsp;&nbsp;&nbsp;月&nbsp;&nbsp;&nbsp;&nbsp;日
                            </p>
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

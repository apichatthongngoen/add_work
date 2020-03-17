<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
<!-- <div class="container-fluid"> -->
<div class="container">
    <h1 class="display-5">แบบฟอร์มสมัครงาน</h1>
    <h1 class="display-5">บริษัท ขุนเดชยนตรการ จำกัด</h1>
    <hr class="my-4">
    <p class="lead"> มุ่งมั่นสร้างมาตรฐานรถยนต์ใช้แล้วที่มีคุณภาพ ด้วยบริการที่สร้างความประทับใจด้วยความซื่อสัตย์ จริงใจ โดยเทคโนโลยีที่ทันสมัยและทีมงานมืออาชีพ</p>
    <hr class="my-4">


<form>
        <div class="form-row">
                <div class="form-group col-md-3">
                        <label for="position_applied">ตำแหน่งที่สมัคร</label>
                        <input type="text" class="form-control" id="position_applied" name="position_applied">
                </div>
                <div class="form-group col-md-3">
                        <label for="expected_salary">เงินเดือนที่ต้องการ</label>
                        <input type="number" class="form-control" id="expected_salary" name="expected_salary">
                </div>
                <div class="form-group col-md-3">
                        <label for="date_work_begin">วันที่สามารถเริ่มงานได้</label>
                        <input type="date" class="form-control" id="date_work_begin" name="date_work_begin">
                </div>
        </div>
        <hr class="my-4">
    <p class="lead"> ข้อมูลส่วนตัว</p>
    <hr class="my-4">
        <div class="form-row">
                <div class="form-group col-md-6">
                        <label for="operate_outside_branch">ท่านสมารถปฎิบัตงานนอกพื้นที่ภูมิลำเนาหรือทางสาขาที่บริษัทกำหนดได้หรือไม่</label>
                        <input type="varchar(2)" class="form-control" id="operate_outside_branch" name="operate_outside_branch">
                </div>
                <div class="form-group col-md-3">
                        <label for="name_id">เลขบัตรประชาชน</label>
                        <input type="number" class="form-control" id="name_id" name="name_id">
                </div>
                <div class="form-group col-md-3">
                        <label for="pic_name_id">รูปบัตรประชาชน</label>
                        <input type="file" class="form-control-file" id="pic_name_id" name="pic_name_id">
                </div>
        </div>
        <div class="form-row">
                <div class="form-group col-md-3">
                        <label for="fname">ชื่อ</label>
                        <input type="text" class="form-control" id="fname" name="fname">
                </div>
                <div class="form-group col-md-3">
                        <label for="lanme">สกุล</label>
                        <input type="text" class="form-control" id="lanme" name="lanme">
                </div>
        </div>
        <div class="form-row">
                <div class="form-group col-md-3">
                        <label for="facebook">FACEBOOK NAME</label>
                        <input type="text" class="form-control" id="facebook" name="facebook">
                </div>
                <div class="form-group col-md-3">
                        <label for="line_id">LINE ID</label>
                        <input type="text" class="form-control" id="line_id" name="line_id">
                </div>
                <div class="form-group col-md-3">
                        <label for="pic_name">รูปตัวเอง</label>
                        <input type="file" class="form-control-file" id="pic_name" name="pic_name">
                </div>
        </div>
        <div class="form-row">
                <div class="form-group col-md-3">
                        <label for="phone1">เบอร์โทร</label>
                        <input type="number" class="form-control" id="phone1" name="phone1">
                </div>
                <div class="form-group col-md-3">
                        <label for="sex">เพศ</label>
                        <input type="text" class="form-control" id="sex" name="sex">
                </div>
                <div class="form-group col-md-3">
                        <label for="address1">ที่อยู่ปัจจุบัน</label>
                        <input type="text" class="form-control" id="address1" name="address1">
                </div>
                <div class="form-group col-md-3">
                        <label for="tel1">เบอร์โทร</label>
                        <input type="number" class="form-control" id="tel1" name="tel1">
                </div>
                <div class="form-group col-md-3">
                        <label for="date_bd">วัน/เดือน/ปีเกิด</label>
                        <input type="date" class="form-control" id="date_bd" name="date_bd">
                </div>
                <div class="form-group col-md-3">
                        <label for="time_bd">เวลาเกิด</label>
                        <input type="time" class="form-control" id="time_bd" name="time_bd">
                </div>
                <div class="form-group col-md-3">
                        <label for="constellation">ปีนักษัตร</label>
                        <input type="text" class="form-control" id="constellation" name="constellation">
                </div>
                <div class="form-group col-md-3">
                        <label for="age">อายุ </label>
                        <input type="number" class="form-control" id="age" name="age">
                </div>
        </div>
        <div class="form-row">
                <div class="form-group col-md-3">
                        <label for="weight1">น้ำหนัก</label>
                        <input type="number" class="form-control" id="weight1" name="weight1">
                </div>
                <div class="form-group col-md-3">
                        <label for="height1"> ส่วนสูง (CM)</label>
                        <input type="number" class="form-control" id="height1" name="height1">
                </div>
                <div class="form-group col-md-3">
                        <label for="race">เชื้อชาติ </label>
                        <input type="text" class="form-control" id="race" name="race">
                </div>
                <div class="form-group col-md-3">
                        <label for="nationality">สัญชาติ</label>
                        <input type="text" class="form-control" id="nationality" name="nationality">
                </div>
        </div>
        <div class="form-row">
                <div class="form-group col-md-3">
                        <label for="religion">ศาสนา </label>
                        <input type="text" class="form-control" id="religion" name="religion">
                </div>
                <div class="form-group col-md-3">
                        <label for="blood"> กรุ๊ปเลือด</label>
                        <input type="text" class="form-control" id="blood" name="blood">
                </div>
        </div>
        <div class="form-row">
                <div class="form-group col-md-3">
                        <label for="Father_name"> ชื่อบิดา </label>
                        <input type="text" class="form-control" id="Father_name" name="Father_name">
                </div>
                <div class="form-group col-md-3">
                        <label for="career1">อาชีพ</label>
                        <input type="text" class="form-control" id="career1" name="career1">
                </div>
                <div class="form-group col-md-3">
                        <label for="tel2">เบอร์โทร</label>
                        <input type="number" class="form-control" id="tel2" name="tel2">
                </div>
        </div>
        <div class="form-row">
                <div class="form-group col-md-3">
                        <label for="Mother_name">ชื่อมารดา</label>
                        <input type="text" class="form-control" id="Mother_name" name="Mother_name">
                </div>
                <div class="form-group col-md-3">
                        <label for="career2">อาชีพ</label>
                        <input type="text" class="form-control" id="career2" name="career2">
                </div>
                <div class="form-group col-md-3">
                        <label for="tel3">เบอร์โทร</label>
                        <input type="number" class="form-control" id="tel3" name="tel3">
                </div>
        </div>
        <div class="form-row">
                <div class="form-group col-md-3">
                        <label for="number_siblings">จำนวนพี่น้อง </label>
                        <input type="number" class="form-control" id="number_siblings" name="number_siblings">
                </div>
                <div class="form-group col-md-3">
                        <label for="number_siblings_of">จำนวนพี่น้อง เป็นคนที่</label>
                        <input type="number" class="form-control" id="number_siblings_of" name="number_siblings_of">
                </div>
                <div class="form-group col-md-3">
                        <label for="marital_status">สถานภาพการสมรส </label>
                        <input type="text" class="form-control" id="marital_status" name="marital_status">
                </div>
                <div class="form-group col-md-3">
                        <label for="spouse_name">ชื่อคู่สมรส</label>
                        <input type="text" class="form-control" id="spouse_name" name="spouse_name">
                </div>
        </div>
        <div class="form-row">
                <div class="form-group col-md-3">
                        <label for="number_children">จำนวนบุตร</label>
                        <input type="number" class="form-control" id="number_children" name="number_children">
                </div>
                <div class="form-group col-md-3">
                        <label for="military_status">สถานะทางทหาร</label>
                        <input type="text" class="form-control" id="military_status" name="military_status">
                </div>
        </div>
        <hr class="my-4">
    <p class="lead"> การศึกษาสูงสุด</p>
    <hr class="my-4">
        <div class="form-row">
                 <div class="form-group col-md-3">
                        <label for="highest_education">ชื่อสถานศึกษา</label>
                        <input type="text" class="form-control" id="highest_education" name="highest_education">
                </div>
                <div class="form-group col-md-3">
                        <label for="gpa">เกรดเฉลี่ย</label>
                        <input type="number" class="form-control" id="gpa" name="gpa">
                </div>
                <div class="form-group col-md-3">
                        <label for="subject1">สาขาวิชา  </label>
                        <input type="text" class="form-control" id="subject1" name="subject1">
                </div>
                <div class="form-group col-md-3">
                        <label for="educational_background">วุฒิการศึกษา</label>
                        <input type="text" class="form-control" id="educational_background" name="educational_background">
                </div>
                <div class="form-group col-md-3">
                        <label for="graduation_year">ปีที่สำเร็จการศึกษา        </label>
                        <input type="number" class="form-control" id="graduation_year" name="graduation_year">
                </div>
                <div class="form-group col-md-9">
                        <label for="study_activities">กิจกรรมระหว่างการศึกษา</label>
                        <input type="text" class="form-control" id="study_activities" name="study_activities">
                </div>

        </div>
        <hr class="my-4">
    <p class="lead"> ระหว่างการศึกษา</p>
    <hr class="my-4">
        <div class="form-row">
                <div class="form-group col-md-3">
                        <label for="scholarships">ทุนการศึกษาหรือรางวัลที่ได้รับ</label>
                        <input type="text" class="form-control" id="scholarships" name="scholarships">
                </div>
                <div class="form-group col-md-3">
                        <label for="internship_courses">หลักสูตรการฝึกอบรม / ดูงาน / ฝึกงานที่ผ่านมา</label>
                        <input type="text" class="form-control" id="internship_courses" name="internship_courses">
                </div>
        </div>
        <hr class="my-4">
    <p class="lead">ความสามารถพิเศษ </p>
    <hr class="my-4">
        <div class="form-row">
                <div class="form-group col-md-3">
                        <label for="knowledge_English_language">ความรู้ด้านภาษา ภาษาอังกฤษ</label>
                        <input type="text" class="form-control" id="knowledge_English_language" name="knowledge_English_language">
                </div>
                <div class="form-group col-md-3">
                        <label for="computer_talent">ความสามารถพิเศษ คอมพิวเตอร์ </label>
                        <input type="text" class="form-control" id="computer_talent" name="computer_talent">
                </div>
                <div class="form-group col-md-3">
                        <label for="ability_vehicles">ความสามารถในการขับขี่ยานพาหนะ   รถยนต์    </label>
                        <input type="text" class="form-control" id="ability_vehicles" name="ability_vehicles">
                </div>
                <div class="form-group col-md-3">
                        <label for="other_abilities">ความสามารถอื่นๆ</label>
                        <input type="text" class="form-control" id="other_abilities" name="other_abilities">
                </div>
        </div>
        <hr class="my-4">
    <p class="lead">ที่ทำงานปัจจุบัน/ประสบการณ์ทำงาน บริษัท</p>
    <hr class="my-4">
        <div class="form-row">
                <div class="form-group col-md-3">
                        <label for="current_workplace">ที่ทำงานปัจจุบัน</label>
                        <input type="text" class="form-control" id="current_workplace" name="current_workplace">
                </div>
                <div class="form-group col-md-3">
                        <label for="position">ตำแหน่ง ที่ทำงานปัจจุบัน</label>
                        <input type="text" class="form-control" id="position" name="position">
                </div>
                <div class="form-group col-md-3">
                        <label for="responsibility">ลักษณะงานที่รับผิดชอบ ที่ทำงานปัจจุบัน</label>
                        <input type="text" class="form-control" id="responsibility" name="responsibility">
                </div>
                <div class="form-group col-md-3">
                        <label for="working_period">ระยะเวลาการทำงาน ที่ทำงานปัจจุบัน</label>
                        <input type="text" class="form-control" id="working_period" name="working_period">
                </div>
                <div class="form-group col-md-3">
                        <label for="final_salary_received">เงินเดือนสุดท้ายที่ได้รับ ที่ทำงานปัจจุบัน</label>
                        <input type="number" class="form-control" id="final_salary_received" name="final_salary_received">
                </div>
                <div class="form-group col-md-3">
                        <label for="other_benefits_company"> สวัสดิการอื่นๆของบริษัท  ที่ทำงานปัจจุบัน</label>
                        <input type="text" class="form-control" id="other_benefits_company" name="other_benefits_company">
                </div>
                <div class="form-group col-md-3">
                        <label for="reason_leaving">สาเหตุที่ออกจากที่ทำงานปัจจุบัน</label>
                        <input type="text" class="form-control" id="reason_leaving" name="reason_leaving">
                </div>
        </div>
        <hr class="my-4">
    <p class="lead">การติดต่อกลับ</p>
    <hr class="my-4">
        <div class="form-row">
                <div class="form-group col-md-3">
                        <label for="urgent_contact_person"> บุคคลที่ติดต่อกรณีเร่งด่วน </label>
                        <input type="text" class="form-control" id="urgent_contact_person" name="urgent_contact_person">
                </div>
                <div class="form-group col-md-3">
                        <label for="the_relationship">ความสัมพันธ์</label>
                        <input type="text" class="form-control" id="the_relationship" name="the_relationship">
                </div>
                <div class="form-group col-md-3">
                        <label for="phone">โทรศัพท์</label>
                        <input type="number" class="form-control" id="phone" name="phone">
                </div>
        </div>
        <div class="form-row">
                <div class="form-group col-md-12">
                        <label for="why_you_want_work">  บอกเหตุผลที่ต้องการทำงานกับ บจก.ขุนเดชยนตรการ</label>
                        <input type="text" class="form-control" id="why_you_want_work" name="why_you_want_work">
                </div>
                <div class="form-group col-md-3">
                        <label for="receive_application_news">  ท่านได้รับข่าวสารการสมัครจากที่ใด</label>
                        <input type="text" class="form-control" id="receive_application_news" name="receive_application_news">
                </div>
                <div class="form-group col-md-3">
                        <label for="works_at_Khun_dejayontakarn">  ท่านรู้จักใครที่ทำงานอยู่ที่ บจก.ขุนเดชยนตรการหรือไม่(ท่านรู้จักให้ระบุชื่อ)</label>
                        <input type="text" class="form-control" id="works_at_Khun_dejayontakarn" name="works_at_Khun_dejayontakarn">
                </div>
                <div class="form-group col-md-3">
                        <label for="refer">แจ้งผู้ที่จะอ้างอิงหรือสอบถามได้ ซึ่งมิใช่ญาติ หรืออดีตผู้ว่าจ้าง</label>
                        <input type="text" class="form-control" id="refer" name="refer">
                </div>
                <div class="form-group col-md-3">
                        <label for="phone2">โทรศัพท์ผู้ที่จะอ้างอิง</label>
                        <input type="number" class="form-control" id="phone2" name="phone2">
                </div>
        </div>
        <div class="col-auto">
                <button type="submit" class="btn btn-primary mb-2">บันทึกข้อมูล</button>
         </div>
</form>

</div>










</body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</html>
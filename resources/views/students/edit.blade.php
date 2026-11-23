<!DOCTYPE html>
<html dir="rtl" lang="ar">
<head>
    <meta charset="UTF-8">
    <title>تعديل طالب</title>
</head>
<body>
    <h2>تعديل بيانات الطالب</h2>

    @if($errors->any())
        <ul style="color: red;">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="/students/{{ $student->id }}" method="POST">
        @csrf
        @method('PUT')
        
        <label>الاسم:</label><br>
        <input type="text" name="name" value="{{ old('name', $student->name) }}"><br><br>

        <label>البريد الإلكتروني:</label><br>
        <input type="email" name="email" value="{{ old('email', $student->email) }}"><br><br>

        <label>رقم الجوال:</label><br>
        <input type="text" name="mobile" value="{{ old('mobile', $student->mobile) }}"><br><br>

        <label>التخصص:</label><br>
        <input type="text" name="major" value="{{ old('major', $student->major) }}"><br><br>

        <button type="submit">تحديث</button>
    </form>
    <br>
    <a href="/students">العودة للقائمة</a>
</body>
</html>
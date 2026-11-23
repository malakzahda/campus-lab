<!DOCTYPE html>
<html dir="rtl" lang="ar">
<head>
    <meta charset="UTF-8">
    <title>إضافة طالب</title>
</head>
<body>
    <h2>إضافة طالب جديد</h2>

    @if($errors->any())
        <ul style="color: red;">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="/students" method="POST">
        @csrf
        <label>الاسم:</label><br>
        <input type="text" name="name" value="{{ old('name') }}"><br><br>

        <label>البريد الإلكتروني:</label><br>
        <input type="email" name="email" value="{{ old('email') }}"><br><br>

        <label>رقم الجوال:</label><br>
        <input type="text" name="mobile" value="{{ old('mobile') }}"><br><br>

        <label>التخصص:</label><br>
        <input type="text" name="major" value="{{ old('major') }}"><br><br>

        <button type="submit">حفظ</button>
    </form>
    <br>
    <a href="/students">العودة للقائمة</a>
</body>
</html>
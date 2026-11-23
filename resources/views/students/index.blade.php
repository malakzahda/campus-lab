<!DOCTYPE html>
<html dir="rtl" lang="ar">
<head>
    <meta charset="UTF-8">
    <title>الطلاب</title>
</head>
<body>
    <h2>قائمة الطلاب</h2>

    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <a href="/students/create">إضافة طالب جديد</a>
    <br><br>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>الاسم</th>
            <th>البريد الإلكتروني</th>
            <th>الجوال</th>
            <th>التخصص</th>
            <th>الإجراءات</th>
        </tr>
        @foreach($students as $student)
        <tr>
            <td>{{ $student->name }}</td>
            <td>{{ $student->email }}</td>
            <td>{{ $student->mobile }}</td>
            <td>{{ $student->major }}</td>
            <td>
                <a href="/students/{{ $student->id }}/edit">تعديل</a>
                <form action="/students/{{ $student->id }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('هل أنت متأكد من الحذف؟')">حذف</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>
Vardas:
</br> <input type="text" name="name" value="{{ old('name', @$friend->name) }}"></br>

Gimimo data:
</br> <input type="text" name="birthday" value="{{ old('birthday', @$friend->birthday) }}"></br>

Tel. Nr.:
</br> <input type="text" name="phone" value="{{ old('phone', @$friend->phone) }}"></br>

Photo:
</br> <input type="file" name="photo" value="{{ old('photo', @$friend->photo) }}"></br>

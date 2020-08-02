# セクション4: データ構造
# 20.リストの使い所

# タクシーの乗車ゲーム
seat = []
min = 0
max = 5
print(min <= len(seat) < max)
seat.append('p')
print(min <= len(seat) < max)
print(len(seat))
seat.append('p')
print(min <= len(seat) < max)
print(len(seat))
seat.append('p')
print(min <= len(seat) < max)
print(len(seat))
seat.append('p')
seat.append('p')
print(min <= len(seat) < max)
print(len(seat))
print(seat.pop(0))
print(min <= len(seat) < max)
print(len(seat))
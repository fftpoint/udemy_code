# セクション5: 制御フローとコード構造
# 39. while文とcontinue文とbreak文

count = 0

# while count < 5:
#     print(count)
#     count += 1

count = 0
while True:
    if count >= 5:
        break

# countineは以下の文を飛ばして繰り返しを次に進める
    if count == 2:
        count += 1
        continue

    print(count)
    count += 1


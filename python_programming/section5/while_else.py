# セクション5: 制御フローとコード構造
# 40.while else文

# while文の中のbreakに引っ掛かったら実行されたくないコマンドをelseに入れる
count = 0

while count < 5:
    # else文を実行しないで終了する
    """
    if count == 1:
        break
    """
    print(count)
    count += 1
else:
    print('done')
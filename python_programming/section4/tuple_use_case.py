# セクション4: データ構造
# 23.タプルの使い所

# 選択肢が複数ある質問をユーザーに投げかけて、複数の選択肢を選択させるゲーム
chose_from_two = ('A', 'B', 'C') 
answer = []
answer.append('A')
answer.append('C')

print(chose_from_two)
print(answer)

# tuple型ではなくてlist型を使用した時に想定されるエラー
chose_from_two = ['A', 'B', 'C']
# chose_from_two = ('A', 'B', 'C') # tupleにすればappendがないから選択肢を改変されることはなくなる
answer = []
chose_from_two.append('A')
chose_from_two.append('C')

print(chose_from_two)
print(answer)

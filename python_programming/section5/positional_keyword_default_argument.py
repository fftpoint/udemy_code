# セクション5: 制御フローとコード構造
# 位置引数とキーワード引数とデフォルト引数

def menu(entree='beef', drink='wine', dessert='ice'):
    print('entree = ',entree)
    print('drink = ', drink)
    print('dessert = ',  dessert)

menu('beef', 'ice', 'beer')
print('----------')
menu('beef', dessert='ice', drink='beer')

# 順番がかぶるとエラー
# menu(dessert='ice', 'beef', drink='beer')

print('----------')
menu('chikien', drink='beer')


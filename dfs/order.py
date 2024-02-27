import requests
from login import login
from fuzzywuzzy import fuzz


class dfs :
    
    def __init__(self,username,password) -> None:
        self.headers=login(username,password)
        self.recipes=self.get_available_recipe()
    def get_available_recipe(self):
        import requests
        response = requests.get('https://dfs-api.deerhold.com/api/v1/menu/active', headers=self.headers)
        recipies=response.json().get('data')
        flat_menu = []
        for category in recipies:
            for food in category['foods']:
                flat_menu.append({
                    'order_name': food['food_name'],
                    'menu_id': food['menu_id'],
                    'category_id': category['category_id'],
                    'category_name': category['category_name']
                })
        return flat_menu

    def get_matching_recipe(self, order_name):
        max_ratio = 0
        matching_recipe = None
        for recipe in self.recipes:
            ratio = fuzz.ratio(order_name.lower(), recipe['order_name'].lower())
            if ratio > max_ratio:
                max_ratio = ratio
                if max_ratio > 70 or order_name in recipe['order_name'].lower() :
                    matching_recipe = recipe
        return matching_recipe
    def delete_order(self,order_id):
        response = requests.delete(f'https://dfs-api.deerhold.com/api/v1/order/{order_id}', headers=self.headers)
        return response.status_code==200
    
    def order(self,order_name:str)->bool:
        matching_recipe=self.get_matching_recipe(order_name)
        if matching_recipe:
            json_data = {
                        'orders': [
                            {
                                'menu_id': matching_recipe.get('menu_id'),
                                'quantity': 1,
                            },
                        ],
                    }
            response = requests.post('https://dfs-api.deerhold.com/api/v1/order', headers=self.headers, json=json_data)
            return response.json().get('data')[0]
        else:
            return {
                "status":"404"
            }


        

user=dfs('pkafle@deerhold.com','oj%t#&*FTumTP6')

priority_list=['']
user.order('tea')
print()
'0a42415e-ce48-42a1-ab6e-f6770c09fdf1'
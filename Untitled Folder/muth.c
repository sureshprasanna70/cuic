# include<stdio.h>
#include <malloc.h>
struct node
{
int info;
struct node*next;
};
typedef struct node * NT;
NT getnode(void)
{
NT p;
p=(NT)malloc(sizeof(struct node));
return p;
}
void insert(NT*plist,int x)
{
NT p,q;
p=getnode();
p->info=x;
p->next=NULL;
if(*plist==NULL)
*plist=p;
else
{
for(q=*plist;q->next!=NULL;q=q->next);
q->next=p;
}
}
void count(NT*plist,int x)
{
NT p;
int c=0;
for(p=*plist;p->info==x&&p!=NULL;p=p->next)
{
c++;
}
printf(" no of element %d",c);
}
int main()
{
NT plist=NULL;
int x;
int a=1,c;
while(a)
{
scanf("%d",&x);
insert(&plist,x);
printf("\n if yu want to enter the no again press 1 or 0\n");
scanf("%d",&a);
}
printf("\n entert the no want to count\n");
scanf("%d",&c);
count(&plist,c);

}
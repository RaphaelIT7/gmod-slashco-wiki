<function name="ItemPickUp" parent="SlashCo" type="libraryfunc">
	<description>
		Attempts to let a survivor pick up the item entity with the given `itemindex`.<br>
		Fails silently if the target slot is occupied, the player recently dropped an item, a slot switch is already in progress, the <page>SlashCoItemPickUp</page> hook blocks it, the entity is flagged `DONTPICKUP`, or an item <page>ITEM#PrePickUp</page>/<page>ITEM#PrePickUpPrimary</page>/<page>ITEM#PrePickUpSecondary</page> callback blocks it.<br>
		On success, equips the item via <page>SlashCo.ChangeSurvivorItem</page> and removes the world entity.
	</description>
	<realm>Server</realm>
	<group>Items</group>
	<args>
		<arg name="ply" type="Player">The player picking up the item.</arg>
		<arg name="itemindex" type="number">EntIndex of the item entity being picked up.</arg>
		<arg name="item" type="string">Name of the item being picked up.</arg>
	</args>
	<rets>
		<ret name="success" type="boolean" optional>`true` if the pickup succeeded, otherwise nothing is returned.</ret>
	</rets>
</function>

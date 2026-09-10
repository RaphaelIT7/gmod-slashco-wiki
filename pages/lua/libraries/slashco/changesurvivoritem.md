<function name="ChangeSurvivorItem" parent="SlashCo" type="libraryfunc">
	<description>
		Equips the given item into the specified slot (forced to the secondary slot if the item is marked as secondary), calling its <page>Item#OnPickUp</page> callback and the previous item's <page>Item#OnSwitchFrom</page> callback.<br>
		Plays an equip sound unless `noSound` is `true`. Passing `"none"` as `id` clears the slot instead.
	</description>
	<realm>Server</realm>
	<group>Items</group>
	<args>
		<arg name="ply" type="Player">The player to equip the item on.</arg>
		<arg name="slot" type="string" optional>`"item"` or `"item2"`. Defaults to `"item"`.</arg>
		<arg name="id" type="string">Name of the item to equip, or `"none"` to clear the slot.</arg>
		<arg name="noSound" type="boolean" optional>If `true`, no equip sound is played.</arg>
	</args>
</function>

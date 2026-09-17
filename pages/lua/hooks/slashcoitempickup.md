<function name="SlashCoItemPickUp" parent="" type="hook">
	<description>
		Called when a survivor is about to pick up a dropped item entity, after the basic slot/timing checks pass but before any item <page>ITEM#PrePickUp</page> callbacks run.<br>
		Return `true` to cancel the pickup.
	</description>
	<realm>Server</realm>
	<args>
		<arg name="ply" type="Player">The player attempting to pick up the item.</arg>
		<arg name="item" type="string">Name of the item being picked up.</arg>
		<arg name="itemindex" type="number">EntIndex of the item entity.</arg>
	</args>
	<rets>
		<ret name="cancel" type="boolean" optional>Return `true` to prevent the pickup.</ret>
	</rets>
</function>

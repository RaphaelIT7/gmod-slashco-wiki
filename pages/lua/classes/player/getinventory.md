<function name="GetInventory" parent="Player" type="classfunc">
	<description>
		Returns the Survivor player class's `Inventory` table.<br>
		<note>This reads the class-level `PLAYER.Inventory` field rather than a per-player value, since the function does not use `self`.</note>
	</description>
	<realm>Shared</realm>
	<rets>
		<ret name="inventory" type="table">The Survivor class's inventory table</ret>
	</rets>
</function>

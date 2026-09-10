<function name="SetSlasherChance" parent="Player" type="classfunc">
	<description>
		Sets the player's stored slasher chance, used when picking who becomes the Slasher.<br>
		This value is tracked serverside only and must be kept in sync with the database stats.
	</description>
	<realm>Server</realm>
	<group>Progression</group>
	<args>
		<arg name="value" type="number">The new slasher chance value</arg>
	</args>
</function>

<function name="GetPrecachedChannel" parent="SlashCo.AudioSystem" type="libraryfunc">
	<description>
		Returns the given precached channel using the identifier, returns nil on failure. If given a callback, it will use that function which will be more reliable.
	</description>
	<realm>Client</realm>
	<args>
		<arg name="identifier" type="string">The identifier to use for this sound</arg>
		<arg name="callback" type="function">The callback function after creation
			<callback>
				<arg name="channel" type="IGModAudioChannel">The created channel</arg>
			</callback>
		</arg>
		<arg name="precacheData" type="SoundData">The SoundData to use in case the channel is missing</arg>
	</args>
	<rets>
		<ret name="channel" type="IGModAudioChannel">The precached channel. This function will NOT return anything if you used a callback and usually you should **always** use a callback.</ret>
	</rets>
</function>